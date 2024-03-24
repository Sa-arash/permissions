<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset(Permission::where('permission','config')->with('roles')->first()->roles[0]))
        {
            Gate::authorize('config',auth()->user()->role);
        }
        return view('role.role');

    }
    public function trash()
    {
        if(isset(Permission::where('permission','config')->with('roles')->first()->roles[0]))
        {
            Gate::authorize('config',auth()->user()->role);
        }
        return view('role.trash');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(isset(Permission::where('permission','config')->with('roles')->first()->roles[0]))
        {
            Gate::authorize('config',auth()->user()->role);
        }
        $categories=Role::query()->get();
        $permissions=Permission::query()->get();
        return view('role.create',compact('categories','permissions'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $selectedPermission = [];
        // $roles =Role::get();
        // dd($roles[0]->id,$roles[0]->permissions[1]->roles);
        $role = role::create([
            'role' => $request->role,
        ]);

        foreach(Permission::get() as $permission){

            if($request[$permission->permission])
            {
                $selectedPermission[]=$request[$permission->permission];

            }
        }
        // dd($selectedPermission);
         $role->permissions()->attach($selectedPermission);
        // dd($role , $role->permissions);
        Session::flash("success_create");
        return redirect()->route('role.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        if(isset(Permission::where('permission','config')->with('roles')->first()->roles[0]))
        {
            Gate::authorize('config',auth()->user()->role);
        }
        $permissions=Permission::query()->get();

        return view('role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $selectedPermission = [];
        foreach(Permission::get() as $permission){

            if($request[$permission->permission])
            {
                $selectedPermission[]=$request[$permission->permission];

            }
        }
        $role->update([
            'role'=>$request->role,
        ]);
        $role->permissions()->sync($selectedPermission);
        Session::flash("success_edit");
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
    }
}
