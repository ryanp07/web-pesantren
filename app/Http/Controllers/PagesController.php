<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function berita()
    {
        return view('berita');
    }
    public function agendasantri()
    {
        return view('agendasan');
    }
    public function agendaacara()
    {
        return view('agendaaca');
    }
    public function guru()
    {
        return view('guru');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function detail()
    {
        return view('detailberita');
    }
    public function login()
    {
        return view('admin.login_admin');
    }
    
}
