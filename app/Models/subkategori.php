<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkategori extends Model
{
    use HasFactory;
    protected $table = 'subkategoris';
    protected $fillable = ['nama_subkategori,id'];
    public function kategori()
    {
        return $this->belongsToMany(kategori::class);
    }

    public function produk()
    {
        return $this->hasMany(produk::class);
    }

}
