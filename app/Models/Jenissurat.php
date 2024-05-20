<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenissurat extends Model
{
    use HasFactory;

    public function surats()
    {
        return $this->hasMany(Surat::class, 'jenis_surat', 'id');
    }
}


