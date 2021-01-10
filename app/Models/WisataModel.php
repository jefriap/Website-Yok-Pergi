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

    public function galeriRelation()
    {
        return $this->hasMany(DaerahModel::class, 'wisata_id');
    }
}
