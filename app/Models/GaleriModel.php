<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\WisataModel;

class GaleriModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'galeri_wisata';

    protected $fillable = [
        'wisata_id', 
        'url_foto',
        'is_default'
    ];

    protected $hidden = [

    ];

    public function wisataRelation()
    {
        return $this->belongsTo(WisataModel::class, 'wisata_id', 'id');
    }
}
