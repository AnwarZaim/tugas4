@extends('admin.AdminProduk')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Peroduk
                    </div>

                    <div class="card-body">
                        <form action="{{ url('AdminProduk', $produk->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="from-grub">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-grub">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" class="form-control"
                                            name="harga"value="{{ $produk->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="f   rom-grub">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" class="form-control"
                                            name="berat"value="{{ $produk->berat }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="from-grub">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control"
                                            name="stok"value="{{ $produk->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="from-grub">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" name="stok" value="{{ $produk->deskripsi }}">
                                </textarea>


                            </div>
                            <button class="btn btn-dark float-right mt-5"><i class="fa fa-save"></i> Simpan</button>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
