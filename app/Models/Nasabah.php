<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    use HasFactory;

    protected $table = 'nasabah';


    // Mass assignable attributes
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'nomor_hp',
        'rekening_nasabah',
    ];

    // Relationship with Pinjaman model
    public function Pinjaman()
    {
        return $this->hasMany(pinjaman::class, 'nasabah_id');
    }

    // Relationship with Simpanan model
    public function rekening()
    {
        return $this->hasmany(rekening::class, "nasabah_id");
    }
}
