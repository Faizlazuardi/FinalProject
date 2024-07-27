<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'role',
        'money',
    ];

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'user_id', 'id');
    }
}
