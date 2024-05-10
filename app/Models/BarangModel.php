<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = "m_barang";
    protected $primaryKey = "barang_id";
    protected $fillable = ['kategori_id', 'kategori_nama', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual', 'image'];


    public function stok(): BelongsTo
    {
        return $this->belongsTo(StokModel::class, 'barang_id', 'barang_id');
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
    protected function image(): Attribute {
        return Attribute::make(
            get: fn ($image)=>url('/storage/posts/' . $image),
        );
    }
}