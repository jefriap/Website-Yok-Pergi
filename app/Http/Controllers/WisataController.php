<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $items = WisataModel::all();
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
    public function store(Request $request)
    {
        $data = $request->all();

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
        alert()->warning('Yakin hapus?','Data yang dihapus tidak bisa dikembalikan!')->showCancelButton('Cancel', '#aaa');
        $item = WisataModel::findOrFail($id);
        $item -> delete();
        toast('Berhasil Dihapus','info');
        return redirect()->route('wisata.index');
    }
}
