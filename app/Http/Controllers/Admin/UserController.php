<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = $request->items ?? 10;
        $search = $request->search ?? '';

        $roles = Role::all();
        if ($search) {
            $users = User::where('nome', 'LIKE', '%'.$search.'%')
            ->orWhere('cognome', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->sortable(['id'])->paginate($items);
        } else {
          $users = User::sortable(['id'])->paginate($items);
        }
        

        return view('admin.users.index', compact('users', 'roles', 'items', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.create', compact('roles', 'permissions'));        
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
            'permissions' => 'exists:permissions,id'
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

        // verifico se sono stati selezionati dei ruoli
        if(array_key_exists('roles', $data)) {
            // aggiungo i ruoli all'utente
            $user->roles()->sync($data['roles']);
        }
        
        // verifico se sono stati selezionati dei profili
        if(array_key_exists('permissions', $data)) {
            // aggiungo i profili all'utente
            $user->permissions()->sync($data['permissions']);
        }


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
            $permissions= Permission::all();
            $roleIds = $user->roles->pluck('id')->toArray();
            $permissionIds = $user->permissions->pluck('id')->toArray();
            return view('admin.users.edit', compact('user', 'roles','permissions', 'roleIds', 'permissionIds'));
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
            $request->validate([
                'nome' => 'required',
                'cognome' => 'required',
                'permissions' => 'exists:permissions,id'
            ], [
                'required' => 'Il contenuto è obbligatorio',
            ]);

            $data = $request->all();
            $user->update($data);

            if (!$data) {
                $user->roles()->detach();
                $user->permissions()->detach();
            }

            if(array_key_exists('roles', $data)) {
                $user->roles()->sync($data['roles']);
            }

            if(array_key_exists('permissions', $data)) {
                $user->permissions()->sync($data['permissions']);
            }

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
            $user->roles()->sync([]);
            $user->permissions()->sync([]);
            $user->delete();
            return redirect()->route('admin.users.index')->with('alert-message', 'Utente eliminato con successo.')->with('alert-type', 'success');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }    
   


}
