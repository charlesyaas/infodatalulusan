<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // use HasFactory;
    protected $fillable = [
        'jenjang',
        'tahun_lulus',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'orang_tua',
        'no_peserta_un',
    ];
}
