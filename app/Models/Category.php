<?php
namespace App\Models;

use App\Models\Toy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,HasUuids;

    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function toys()
    {
        return $this->hasMany(Toy::class, 'category_id', 'id');
    }
}
