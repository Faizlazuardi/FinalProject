<?php

namespace App\Models;

use App\Models\Toy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function toys()
    {
        return $this->hasMany(Toy::class, 'category_id', 'category_id');
    }
}
