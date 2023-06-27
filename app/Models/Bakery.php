<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    use HasFactory;
    protected $table = 'bakery';
    //protected $fillable = ['id_produk','nama_produk','kategori_produk','harga'];
    protected $guarded = [];
    
}
