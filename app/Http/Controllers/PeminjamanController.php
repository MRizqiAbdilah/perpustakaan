<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Member;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peminjaman.index', [
            "title" => "Peminjaman",
            "peminjaman" => Peminjaman::all()
        ]);
    }

    public function kembali()
    {
        return view('pengembalian.index', [
            "title" => "Pengembalian",
            "peminjaman" => Peminjaman::all()
        ]);
    }

    public function laporan()
    {
        $this->authorize('anggota');
        
        return view('laporan.index', [
            "title" => "Laporan",
            "peminjaman" => Peminjaman::all(),
            "member" => Member::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create', [
            "title" => "Peminjaman Book",
            "members" => Member::all(),
            "posts" => Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'member_id' => ['required'],
            'post_id' => ['required'],
            'tanggal_peminjaman' => ['required'],
            'tanggal_kembali' => ['required'],
        ]);

        Peminjaman::create($validatedData);

        return redirect('/peminjaman')->with('success', 'New Book has been Added!');
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
