<form action="{{ url('AdminProduk', $produk->id) }}" method="post" class="from.inline"
    onsubmit="return confirm('Yakin Ingin Menghapus Data ini')">
    @csrf
    @method('delete')
    <button class="btn btn-danger"><i class="fa fa-trash"></i>
</form>
