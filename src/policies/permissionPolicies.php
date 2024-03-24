<?php

namespace saArash\permissions\policies;

use saArash\permissions\models\Permission;
//use App\Models\user;
use Illuminate\Auth\Access\Response;

class permissionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
//    public function viewAny(User $user)
//    {
//        //
//    }
//
//    /**
//     * Determine whether the user can view the model.
//     */
//    public function view(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','view')->first();
//    }
//
//    /**
//     * Determine whether the user can create models.
//     */
//    public function create(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','create')->first();
//    }
//
//    /**
//     * Determine whether the user can update the model.
//     */
//    public function update(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','update')->first();
//    }
//
//    /**
//     * Determine whether the user can delete the model.
//     */
//    public function delete(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','delete')->first();
//    }
//
//    /**
//     * Determine whether the user can restore the model.
//     */
//    public function restore(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','restore')->first();
//    }
//
//    /**
//     * Determine whether the user can permanently delete the model.
//     */
//    public function forceDelete(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','forceDelete')->first();
//    }
//
//    public function trash(): bool
//    {
//        return null !== auth()->user()->role->permissions->where('permission','trash')->first();
//    }
//    public function config(): bool
//    {
//        if(isset(Permission::where('permission','config')->with('roles')->first()->roles[0]))
//        {
//            return null !== auth()->user()->role->permissions->where('permission','config')->first();
//        }else{
//            return true;
//        }
//    }

}
