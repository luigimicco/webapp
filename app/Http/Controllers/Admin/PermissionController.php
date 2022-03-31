<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Permission;
use App\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ipp = $request->ipp ?? 10; // items per page
        $search = $request->search ?? '';

        if ($search) {
            $items = Permission::where('nome', 'LIKE', '%'.$search.'%')
            ->sortable(['id'])->paginate($ipp);
        } else {
          $items = Permission::sortable(['id'])->paginate($ipp);
        }

        return view('admin.permissions.index', compact('items', 'ipp', 'search'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = new Permission();
        return view('admin.permissions.form', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
            ]
        );

        $data = $request->all();
        $data['active'] = false;
        $permission = new Permission();
        $permission->fill($data);
        $permission->save();

        return redirect()->route('admin.permissions.show', compact('permission'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.form', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate(
            [
                'name' => 'required|string',
            ]
        );

        $data = $request->all();
        $permission->update($data);

        return redirect()->route('admin.permissions.show', compact('permission'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('admin.permissions.index')->with('alert-message', 'Profilo eliminato con successo.')->with('alert-type', 'success');
    }

    /**
     * Shows a list of related users for the specified permission
     * 
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     * 
     */
    public function users(Permission $permission) {

        $items = $permission->users;

        return view('admin.permissions.users', compact('permission', 'items'));
    }

}
