<?php

namespace App\Models;

use App\Models\InvoiceHeader;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'role',
        'money',
    ];

    public function invoiceHeaders()
    {
        return $this->hasMany(InvoiceHeader::class, 'user_id', 'id');
    }
}
