<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class AdminRegistrationModel extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;

    protected $table = 'admin_registration';
    protected $fillable = [
        'adminId',
        'adminName',
        'adminContactNumber',
        'adminEmail',
        'adminPassword'
    ];

    public function getAuthPassword()
    {
        return $this->adminPassword;
    }
}
