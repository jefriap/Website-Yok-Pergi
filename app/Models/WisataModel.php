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
        'slug',
        'deskripsi',
        'kategori',
        'kecamatan',
        'kabupaten',
        'provinsi'
    ];

    protected $hidden = [

    ];

    public function galeriRelasiIndex()
    {
        return $this->hasMany(GaleriModel::class, 'wisata_id')
                    ->where('is_default', '=', 1);
    }

    public function galeriRelasiDetail()
    {
        return $this->hasMany(GaleriModel::class, 'wisata_id');
    }
}
