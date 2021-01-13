<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\GaleriModel;

use App\Models\WisataModel;
use App\Http\Requests\WisataRequest;

use RealRashid\SweetAlert\Facades\Alert;

class WisataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WisataModel::all()->sortBy('kategori');
        return view('pages.wisata.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WisataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_wisata);

        WisataModel::create($data);
        
        toast('Berhasil Ditambah','success');
        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WisataModel::findOrFail($id);

        return view('pages.wisata.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = WisataModel::findOrFail($id);
        $item->update($data);

        toast('Berhasil Diubah','success');
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WisataModel::findOrFail($id);
        $item -> delete();

        GaleriModel::where('wisata_id', $id)->delete();

        toast('Berhasil Dihapus','success');
        return redirect()->route('wisata.index');
    }

    public function galeri($id)
    {
        $wisata = WisataModel::findOrFail($id);
        $items = GaleriModel::with('wisataRelation')
            ->where('wisata_id', $id)
            ->get();

        return view('pages.wisata.galeri')->with([
            'wisata' => $wisata,
            'items' => $items
        ]);
    }
}
