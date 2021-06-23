<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class A_GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit_galeri(Galeri $galeri)
    {
        return view ('admin.edit.A_edit_galeri',compact('galeri'));
    }

    public function update_galeri(request $request,galeri $galeri)
    {
        $request->validate([
            'id'=>'required',
            'deskripsi'=>'required',
        ]);

        $gambar = $galeri->gambar;
        if($request->gambar != null){
            $gambar = $request->gambar;
        }

        Galeri::where('id',$galeri->id)
        ->update([
            'id' => $request -> id,
            'deskripsi' => $request -> deskripsi
            ]);
        
        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/galeri/',$request->file('gambar')->getClientOriginalName());
            $galeri -> gambar = $request -> file('gambar')-> getClientOriginalName();
            $galeri -> save();
        }

        return redirect()->back()->withSuccess('data berhasil diubah!');
    }

    public function tambah_galeri()
    {
        return view ('admin.add.A_tambah_galeri');
    }

    public function tambahkan_galeri(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'gambar'=>'required',
            'deskripsi'=>'required',
        ]);

        $galeri = new Galeri();
        $galeri -> id = $request->id;
        $galeri -> deskripsi = $request->deskripsi;
        

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/galeri/',$request->file('gambar')->getClientOriginalName());
            $galeri -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }

        $galeri->save();

        return redirect()->back()->withSuccess('data berhasil ditambah');
    }

    public function hapus_galeri(Galeri $galeri)
    {
        Galeri::destroy($galeri -> id);
        return redirect('/admin_galeri')->with ('status','Data Ini Berita Berhasil Dihapus');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
