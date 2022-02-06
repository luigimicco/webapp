<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $users = User::orderBy('nome', 'asc')->orderBy('cognome', 'asc')->paginate(10);
        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));        
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|unique:users',
            'nome' => 'required',
            'cognome' => 'required',
        ], [
            'required' => 'Il contenuto è obbligatorio',
            'email.unique' => 'Email già in uso',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = new User();
        $user->fill($data);
        $user->active = false;

        $user->save();

        return redirect()->route('admin.users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user_id = Auth::id();

        if ($user_id == 1) {
            return view('admin.users.show', compact('user'));
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user_id = Auth::id();

        if ($user_id == 1 or $user_id == $user->id) {

            $roles = Role::all();
            $roleIds = $user->roles->pluck('id')->toArray();
            return view('admin.users.edit', compact('user', 'roles', 'roleIds'));
        } else {
            return redirect()->route('admin.dashboard');
        }
    } 
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user_id = Auth::id();

        if ($user_id == 1 or $user_id == $user->id) {

            $data = $request->roles;
            $user->update($data);
            if (!$data) $user->roles()->detach();
            else $user->roles()->sync($data);
            return redirect()->route('admin.users.index')->with('alert', 'success')->with('alert-message', "$user->name modificato con successo");

//            return redirect()->route('admin.users.show', compact('user'));
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user_id = Auth::id();

        if ($user_id == 1) {
            $user->delete();
            return redirect()->route('admin.users.index')->with('alert-message', 'Utente eliminato con successo.')->with('alert-type', 'success');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }    
   


}
