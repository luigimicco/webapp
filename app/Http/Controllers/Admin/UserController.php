<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rule;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $ipp = $request->ipp ?? 10; // items per page
        $search = $request->search ?? '';

        $roles = Role::all();
        if ($search) {
            $items = User::where('nome', 'LIKE', '%' . $search . '%')
                ->orWhere('cognome', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->sortable(['id'])->paginate($ipp);
        } else {
            $items = User::sortable(['id'])->paginate($ipp);
        }

        return view('admin.users.index', compact('items', 'roles', 'ipp', 'search'));
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
        return view('admin.users.form', compact('roles', 'permissions'));
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
            'password' => 'min:8|confirmed',
            'email' => Rule::unique('users'),
            'permissions' => 'exists:permissions,id'
        ], [
            'required' => 'Il contenuto è obbligatorio',
            'confirmed' => 'Le due password non coincidono',
            'email.unique' => 'Email già in uso',
        ]);

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $user = new User();
        $user->fill($data);
        $user->active = false;

        $user->save();

        // verifico se sono stati selezionati dei ruoli
        if (array_key_exists('roles', $data)) {
            // aggiungo i ruoli all'utente
            $user->roles()->sync($data['roles']);
        }

        // verifico se sono stati selezionati dei profili
        if (array_key_exists('permissions', $data)) {
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

        $roles = Role::all();
        return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $roleIds = $user->roles->pluck('id')->toArray();
        $permissionIds = $user->permissions->pluck('id')->toArray();
        return view('admin.users.form', compact('user', 'roles', 'permissions', 'roleIds', 'permissionIds'));
    }


    /**
     * Toggle on active field.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enableToggle(User $user)
    {
        $user->active = !$user->active;
        $user->save();

        $message = ($user->active) ? "abilitato" : "disabilitato";
        return redirect()->route('admin.users.index')->with('alert-type', 'success')->with('alert-message', "$user->nome&nbsp;$user->cognome&nbsp;<b>$message</b>&nbsp;con successo");

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

        $request->validate([
            'nome' => 'required',
            'cognome' => 'required',
            'permissions' => 'exists:permissions,id',
            'password' => 'nullable|min:8|confirmed',
            'email' => Rule::unique('users')->ignore($user->id),
        ], [
            'required' => 'Il contenuto è obbligatorio',
        ]);

        $data = $request->all();

        if ($data['password'] == "") {
            unset($data['password']);
            unset($data['password_confirmation']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        if (!$data) {
            $user->roles()->detach();
            $user->permissions()->detach();
        }

        if (array_key_exists('roles', $data)) {
            $user->roles()->sync($data['roles']);
        }

        if (array_key_exists('permissions', $data)) {
            $user->permissions()->sync($data['permissions']);
        }

        return redirect()->route('admin.users.index')->with('alert-type', 'success')->with('alert-message', "Utente&nbsp;<b>$user->nome&nbsp;$user->cognome</b>&nbsp;modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->sync([]);
        $user->permissions()->sync([]);
        $user->delete();
        return redirect()->route('admin.users.index')->with('alert-type', 'success')->with('alert-message', "Utente&nbsp;<b>$user->nome&nbsp;$user->cognome</b>&nbsp;eliminato con successo.");
    }
}
