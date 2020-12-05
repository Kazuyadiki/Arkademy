<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produk')->get();
        return view('blog.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|unique:produk',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $query = DB::table('produk')->insert([
           "nama_produk" => $request["nama_produk"],
           "keterangan" => $request["keterangan"],
           "harga" => $request["harga"],
           "jumlah" => $request["jumlah"]
        ]);
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produ = DB::table('produk')->where('id', $id)->first();
        return view('blog.show', compact('produ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produ = DB::table('produk')->where('id', $id)->first();
        return view('blog.edit', compact('produ'));
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
        $request->validate([
            'nama_produk' => 'required|unique:produk',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $query = DB::table('produk')
                    ->where('id', $id)
                    ->update([
                        'nama_produk' => $request['nama_produk'],
                        'keterangan' => $request['keterangan'],
                        'harga' => $request['harga'],
                        'jumlah' => $request['jumlah']
                    ]);
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('produk')->where('id', $id)->delete();
        return redirect('/produk');
    }
}
