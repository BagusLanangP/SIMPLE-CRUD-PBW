<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailSurat extends Model
{
    protected $guarded = [
        'id',
    ];
    use HasFactory;
    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id');
    }
}
