<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpenjualan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "detailpenjualan";

    protected $fillable = ['DetailID', 'PenjualanID', 'ProdukID', 'JumlahProduk', 'Subtotal'];
}
