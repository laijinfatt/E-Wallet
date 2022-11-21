<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const DEFAULT = 5;
    const AGENT = 4;
    const BRANCH = 3;
    const SUBADMIN = 2;
    const ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'account_id',
        'account_level',
        'account_name',
        'name',
        'username',
        'email',
        'handphone_number',
        'ic',
        'base_currency',
        'credit_available',
        'address',
        'remark',
        'status',
        'password',
        'credit_limit',
        'join_date',
        'type',
        'created_by',
        'deleted_by',
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
    ];
    
    public function type()
    {
        return (int) $this->type;
    }

    public function isAdmin(): bool
    {
        return $this->type() === self::ADMIN;
    }

    public function isAgent(): bool
    {
        return $this->type() === self::AGENT;
    }

    public function isMember(): bool
    {
        return $this->type() === self::DEFAULT;
    }

    public function isSubadmin(): bool
    {
        return $this->type() === self::SUBADMIN;
    }

    public function isBranch(): bool
    {
        return $this->type() === self::BRANCH;
    }

}