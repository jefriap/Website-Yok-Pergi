<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WisataModel;
use App\Models\GaleriModel;
use App\Http\Requests\GaleriRequest;
use File;

class GaleriController extends Controller
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
        $items = GaleriModel::with('WisataRelation')->get();

        return view('pages.galeri.index')->with([
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
        $wst = WisataModel::all();
        return view('pages.galeri.create')->with([
            'wst' => $wst
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriRequest $request)
    {
        $data = $request->all();
        
        $nama_url_foto = $request->file('url_foto')->getClientOriginalName();
        $url_foto = $request->file('url_foto')->move('uploads/foto-wisata', $nama_url_foto);
        $data['url_foto'] = $nama_url_foto;


        GaleriModel::create($data);
        
        toast('Berhasil Ditambah','success');
        return redirect()->route('galeri.index');
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
        //
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
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GaleriModel::findOrFail($id);
        $item -> delete();
        
        toast('Berhasil Dihapus','success');
        return redirect()->route('galeri.index');
    }
}
