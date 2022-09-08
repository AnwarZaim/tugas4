<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class AdminProdukController extends Controller
{


    function index()
    {
        $data['list_produk'] = Produk::all();
        return view('Produk.index', $data);
    }

    function create()
    {
        return view('Produk.create');
    }

    function store()
    {
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('AdminProduk')->with('success', 'Data Berhasil Di Tambahkan');
    }

    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('Produk.show', $data);
    }

    function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('Produk.edit', $data);
    }

    function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('AdminProduk')->with('success', 'Data Berhasil Di Edit');
    }

    function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('AdminProduk')->with('danger', 'Data Berhasil Di Hapus');
    }
}
