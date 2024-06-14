<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $guarded = [
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function toys()
    {
        return $this->hasMany(Toy::class);
    }
}
