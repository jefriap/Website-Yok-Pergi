<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GaleriModel;
use App\Models\WisataModel;

class BlogController extends Controller
{
    public function index(){
        $dataWisata = WisataModel::with('galeriRelasiIndex')
                      ->orderBy('created_at', 'desc')
                      ->paginate(6);

        return view('layouts.index')->with([
            'dataWisata' => $dataWisata
        ]);
    }

    public function wisata($slug, $id)
    {
        $wisataData = WisataModel::where('slug', $slug)->with('galeriRelasiIndex')->get();
        $items = GaleriModel::with('wisataRelation')
                            ->where('wisata_id', $id)
                            ->get();

        return view('pages.blog.detail')->with([
            'wisataData' => $wisataData,
            'items' => $items
        ]);
    }
}
