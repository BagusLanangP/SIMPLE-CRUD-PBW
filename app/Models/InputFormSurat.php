<?php

namespace App\Models;

use App\Models\Jenissurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class inputFormSurat extends Model
{
    use HasFactory;
    public function jenisSurat()
    {
        return $this->belongsTo(Jenissurat::class, 'jenisSurat_id', 'id');
    }
}
