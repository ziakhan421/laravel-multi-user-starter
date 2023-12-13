<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN_ROLE = 'admin';
    const COMPANY_ROLE = 'company';
    const MANAGER_ROLE = 'branch-manager';
    const INSPECTOR_ROLE = 'inspector';

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|min:6',
        'company_name' => 'max:255',
        'username' => 'max:255|unique:users,username',
        'company_id' => 'exists:users,id',
        'branch_Id' => 'exists:branches,id',
        'picture' => 'mimes:jpeg,jpg,png|max:2048',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'company_name',
        'username',
        'company_id',
        'branch_Id',
        'role',
        'plan',
        'note',
        'picture',
        'telephone',
        'email',
        'password',
        'created_by'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
