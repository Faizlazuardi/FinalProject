<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class InvoiceHeader extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'invoice_header_id',
    ];
    protected $fillable = [
        'user_id',
        'total_price',
];
    protected $guarded = [
        'created_at',
        'updated_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class,'invoice_detail_id');
    }
}
