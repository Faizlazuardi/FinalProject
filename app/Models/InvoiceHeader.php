<?php

namespace App\Models;

use App\Models\User;
use App\Models\InvoiceDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceHeader extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_header_id';
    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_header_id', 'invoice_header_id');
    }
}
