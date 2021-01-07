<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WisataModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'wisata';

    protected $fillable = [
        'nama_wisata', 
        'deskripsi',
        'kategori',
        'kecamatan',
        'kabupaten',
        'provinsi'
    ];

    protected $hidden = [

    ];

    public function daerahRelation()
    {
        return $this->belongsTo(DaerahModel::class, 'daerah_id', 'id');
    }
}
