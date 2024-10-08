<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simpanan extends Model
{
    use HasFactory;

    protected $table = 'simpanan';

    // Mass assignable attributes
    protected $fillable = [
        'nasabah_id',
        'jumlah_simpanan',
        'bunga_simpanan',
    ];

    // Relationship with Nasabah model
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nasabah_id');
    }
}
