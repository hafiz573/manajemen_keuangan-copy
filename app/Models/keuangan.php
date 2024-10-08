<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    use HasFactory;


    protected $table = 'keuangans';


    protected $fillable =[
        'pengeluaran',
        'tanggal_pengeluaran',
        'pemasukan',
        'tanggal_pemasukan',
        'jumlah_dana',

    ];
}
