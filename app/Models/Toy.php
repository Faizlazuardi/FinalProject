<?php

namespace App\Models;

use App\Models\Category;
use App\Models\InvoiceDetail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id',
        'image',
        'name',
        'description',
        'stock',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'toy_id', 'id');
    }
}
