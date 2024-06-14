<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class InvoiceHeader extends Model
{
    use HasFactory;

    public function toys()
    {
        return $this->belongsTo(Toy::class);
    }
}
