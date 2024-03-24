<?php

namespace saArash\permissions\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;
    protected $fillable =['permission','title'];


    public function roles()
    {
        return $this->belongsToMany(Role::class ,'role_permission');
    }
}
