<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'invoice_detail_id',
        'invoice_header_id',
        'toy_id',];
    protected $fillable = [
        'quantity',
        'subTotal',
    ];
    protected $guarded = [
        'created_at',
        'updated_at',
    ];
    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class);
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class);
    }
}
