<?php

namespace App\Models;

use App\Models\Toy;
use App\Models\InvoiceHeader;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceDetail extends Model
{
    use HasFactory,HasUuids;

    protected $primaryKey = 'id';
    protected $fillable = [
        'invoice_header_id',
        'toy_id',
        'quantity',
        'subTotal',
    ];

    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class, 'invoice_header_id', 'id');
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class, 'toy_id', 'id');
    }
}
