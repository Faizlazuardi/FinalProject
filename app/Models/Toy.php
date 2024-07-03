<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $primaryKey = 'toy_id';
    protected $fillable = [
        'category_id',
        'image',
        'name',
        'description',
        'stock',
        'price',
    ];
    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', Category::class);
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_detail_id', InvoiceDetail::class);
    }
}
