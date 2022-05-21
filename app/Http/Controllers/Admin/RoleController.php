<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['Admin'])->get();
        return view('admin.roles.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required']);
        Role::create($validated);

        return to_route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', ['role' => $role, 'permissions' => $permissions]);
    }


    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => 'required']);
        $role->update($validated);
        return to_route('admin.roles.index');
    }


    public function givePermission(Request $request, $roleId)
    {
        //$permission = Permission::findByName($request->permission);
        $wtf = Role::findById($roleId)->givePermissionTo($request->permission);

//        dd($role->hasAnyPermission($request->permission));
//        if ($role->hasPermissionTo($request->permission)) {
//            return redirect()->back();
//        }
        //$permission->assignRole($roleId);
        //$role->givePermissionTo($permission);
        dd($wtf);

        return to_route('admin.roles.index');
    }

}
