<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    use HasFactory;
    protected $table = 'kembali';
    protected $primaryKey = 'kembali_id';
    // protected $keyType = 'string';

    protected $fillable = [
        'kembali_id',
        'pinjam_id',
        'tgl_kembali',
        'denda'
    ];
}
