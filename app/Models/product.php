<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Jika nama tabel sudah sesuai konvensi Laravel ("products"), ini sebenarnya tidak perlu
    protected $table = 'products';

    // Isi kolom yang boleh diisi mass-assignment (untuk $model->fill([...]))
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sku',
        'price',
        'stock',
        'product_category_id',
        'image_url',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'product_category_id');
    }
}