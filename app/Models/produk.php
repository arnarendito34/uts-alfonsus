<?php
//model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}
