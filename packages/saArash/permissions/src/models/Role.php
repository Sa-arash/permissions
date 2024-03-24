<?php

namespace saArash\permissions\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['role'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class ,'role_permission');
    }
    public function users()
    {
       return $this->hasMany(User::class);
    }
}
