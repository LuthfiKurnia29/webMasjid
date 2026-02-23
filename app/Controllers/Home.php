<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home', ['title' => 'Beranda - Masjid An Namiroh Firdaus']);
    }

    public function jadwal(): string
    {
        return view('pages/jadwal', ['title' => 'Jadwal Sholat - Masjid An Namiroh Firdaus']);
    }

    public function program(): string
    {
        return view('pages/program', ['title' => 'Program & Kegiatan - Masjid An Namiroh Firdaus']);
    }

    public function donasi(): string
    {
        return view('pages/donasi', ['title' => 'Donasi - Masjid An Namiroh Firdaus']);
    }

    public function kontak(): string
    {
        return view('pages/kontak', ['title' => 'Kontak Kami - Masjid An Namiroh Firdaus']);
    }
}

