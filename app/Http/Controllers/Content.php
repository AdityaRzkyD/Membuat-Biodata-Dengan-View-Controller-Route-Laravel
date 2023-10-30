<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Nama = "Aditya Rizky Darmawan";
        $Kelas = "3C Informatika";
        $NPM = 2210631170109;
        $Alamat = "Kaum 2, Kel. Karawang Kulon";
        $TanggalLahir = "09-12-2003";

        return view('Content', [
            'Nama' => $Nama,
            'Kelas' => $Kelas,
            'NPM' => $NPM,
            'Alamat' => $Alamat,
            'TanggalLahir' => $TanggalLahir
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
