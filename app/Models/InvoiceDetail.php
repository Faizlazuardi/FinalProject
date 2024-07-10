<?php

namespace App\Models;

use App\Models\Toy;
use App\Models\InvoiceHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_detail_id';
    protected $fillable = [
        'invoice_header_id',
        'toy_id',
        'quantity',
        'subtotal',
        'created_at',
        'updated_at',
    ];

    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class, 'invoice_header_id','invoice_header_id' );
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class, 'toy_id','toy_id');
    }
}
