<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    public function tipe_surat()
    {
        return $this->belongsTo(Jenissurat::class, 'id');
    }

    protected $fillable = [
        'name',
        'kelas',
        'jenissurat',
        'prodi'
    ];
}
