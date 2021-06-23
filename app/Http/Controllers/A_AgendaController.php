<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class A_AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit_agenda(Agenda $agenda)
    {
        return view ('admin.edit.A_edit_agenda',compact('agenda'));
    }

    public function update_agenda(request $request,agenda $agenda)
    {
        $request->validate([
            'id'=>'required',
            'tanggal'=>'required',
            'judul'=>'required',
            'lokasi'=>'required',
        ]);

        $gambar = $agenda->gambar;
        if($request->gambar != null){
            $gambar = $request->gambar;
        }


        Agenda::where('id',$agenda->id)
        ->update([
            'id' => $request -> id,
            'tanggal' => $request -> tanggal,
            'judul' => $request -> judul,
            'jam' => $request -> jam,
            'lokasi' => $request -> lokasi,
            ]);
        
        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/agenda/',$request->file('gambar')->getClientOriginalName());
            $agenda -> gambar = $request -> file('gambar')-> getClientOriginalName();
            $agenda -> save();
        }

        return redirect()->back()->withSuccess('Data Berhasil DiUbah!');
    }

    public function tambah_agenda()
    {
        return view ('admin.add.A_tambah_agenda');
    }

    public function tambahkan_agenda(Request $request)
    {

        $request->validate([
            'id'=>'required',
            'tanggal'=>'required',
            'judul'=>'required',
            'lokasi'=>'required',
            'gambar'=>'required',
        ]);

        $agenda = new Agenda;
        $agenda -> id = $request->id;
        $agenda -> judul= $request->judul;
        $agenda -> tanggal = $request->tanggal;
        $agenda -> jam = $request->jam;
        $agenda -> lokasi = $request->lokasi;
        $agenda -> gambar = $request->gambar;
        

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/agenda/',$request->file('gambar')->getClientOriginalName());
            $agenda -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }

        $agenda->save();
        return redirect()->back()->withSuccess('Data Berhasil DiTambah!');
    }

    public function hapus_agenda(Agenda $agenda)
    {
        Agenda::destroy($agenda -> id);
        return redirect('/admin_agenda')->with ('status','Data Isi Berita Berhasil Dihapus');
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
