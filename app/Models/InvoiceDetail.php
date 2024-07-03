<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_detail_id';
    protected $fillable = [
        'invoice_header_id',
        'toy_id',
        'quantity',
        'subTotal',
    ];
    protected $guarded = [
        'created_at',
        'updated_at',
    ];
    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class, 'invoice_header_id');
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class, 'toy_id');
    }
}
