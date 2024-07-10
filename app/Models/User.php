<?php

namespace App\Models;

use App\Models\InvoiceHeader;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $guarded = [
        'firstname',
        'lastname',
        'email',
        'password',
        'role',
        'money',
        'created_at',
        'updated_at',
    ];

    public function invoiceHeaders()
    {
        return $this->hasMany(InvoiceHeader::class, 'user_id', 'user_id');
    }
}
