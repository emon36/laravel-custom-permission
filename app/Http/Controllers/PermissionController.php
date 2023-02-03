<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('permission.create', ['permissions' => $permissions, 'roles' => $roles] );

    }

    public function store(Request $request)
    {

        $permissions = [];

        foreach ($request->permissions as $key => $value)
        {
           $permissions[] = [
             'role_id' => $request->role_id,
             'permission' => $request->permissions[$key]
           ];
        }

        RolePermission::insert($permissions);

        return redirect()->back()->with('success' , 'Permissions added successfully');

    }
}
