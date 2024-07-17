<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmenuData extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'elemen',
        'data2021',
        'data2022',
        'data2023',
        'data2024',
        'satuan',
        'sifat_data',
        'status',
        'otoritas',
        'verifikasi',
        'slug',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'slug', 'slug');
    }
}
