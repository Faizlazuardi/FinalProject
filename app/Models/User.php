<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $primaryKey = 'user_id'; // Menggunakan user_id sebagai primary key

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'role',
        'money',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function invoiceHeaders()
    {
        return $this->hasMany(InvoiceHeader::class,'invoice_header_id');
    }
}
