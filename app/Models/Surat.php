<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jenissurat;
use App\Models\DetailSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'jenisSurat_id', 
    //     'nomorSurat',
    //     'created_at', 
    //     'updated_at'
    // ];
    protected $guarded = [
        'id',
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(Jenissurat::class, 'jenisSurat_id');
    }

    public function detail_surat()
    {
        return $this->hasMany(DetailSurat::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // protected $fillable = [
    //     'name',
    //     'kelas',
    //     'jenissurat',
    //     'prodi'
    // ];
}
