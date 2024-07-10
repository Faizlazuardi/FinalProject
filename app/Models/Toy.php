<?php

namespace App\Models;

use App\Models\Category;
use App\Models\InvoiceDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'toy_id', 'toy_id');
    }
}
