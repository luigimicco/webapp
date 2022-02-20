<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $roles = Role::all();
        $user = User::findOrFail(Auth::id());
        return view('private.profile', compact('user', 'roles'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'nome' => 'required|max:50',
            'cognome' => 'required|max:50',
            'password' => 'nullable|min:8|confirmed', 
            'email' => Rule::unique('users')->ignore(Auth::id()),
        ], [
            'required' => 'Il campo è obbligatorio',
            'confirmed' => 'Le due password non coincidono',
            'unique' => 'Indirizzo email già utilizzato',
        ]);

        $data = $request->all();

        $user = User::findOrFail(Auth::id());

        if ($data['password'] == "") {
            unset($data['password']);
            unset($data['password_confirmation']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }


        if ( (array_key_exists('deleteimage', $data) || $request->hasFile('image')) && $user->image ) {
            // se presente cancella l'immagine precedente
            Storage::delete('profiles/' . $user->image);
            $data['image'] = "";
        }
        
        
        // gestisce l'upload dell'immagine di profilo
        if ($request->hasFile('image')) {
            
            $avatar = $request->file('image');

            // ridimensione l'immagine di profilo
            $image = Image::make($avatar)->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->resizeCanvas(300, 300, 'center', false, 'ffffff');

            $filename = (string) $image->encode();
            $imagename = $avatar->hashName('profiles');
            Storage::put($imagename, $filename);
                $data['image'] = substr($imagename, 9);

        }

        $user->update($data);

        return redirect()->route('profile');
    }
}
