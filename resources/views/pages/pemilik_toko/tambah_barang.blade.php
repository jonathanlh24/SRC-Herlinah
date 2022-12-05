@extends('layout.pemilik_main')

@section('content')

<form action="/tambahBarang" method="post" id="tambahBarang">

    <!-- ALERT DI TAMBAH BARANG -->
    @if(session('failedAddBarang'))
    <div class="alert  alert-danger w-100 text-center" role="alert">
        {{session('failedAddBarang')}}
    </div>
    @endif

    @csrf
    <div class="container w-50">
        <div class="text-center mt-3">
            <h3><strong>Tambah Barang</strong></h3>
        </div>
        <div class="mt-4">
            <div class="form-group row">
                <label for="inputIDBarang" class="col-sm-3 col-form-label">ID Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputIDBarang" placeholder="Masukkan ID Barang" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="idBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNamaBarang" placeholder="Masukkan Nama Barang" maxlength="100" name="namaBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputStokBarang" class="col-sm-3 col-form-label">Stok Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputStokBarang" placeholder="Masukkan Jumlah Stok" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" name="stokBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputHargaBeli" class="col-sm-3 col-form-label">Harga Beli</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputHargaBeli" placeholder="Masukkan Harga Beli" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;" name="hargaBeli" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputHargaJual" class="col-sm-3 col-form-label">Harga Jual</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputHargaJual" placeholder="Masukkan Harga Jual" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;" name="hargaJual" required>
                </div>
            </div>
        </div>
        <div class="text-end mt-3 mb-3">
            <a href="/dataBarang" type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</a>
            <button type="button" class="btn btn-primary ms-3" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalTambahBarang">Simpan</button>
        </div>
    </div>

    <!-- KONFIRMASI SIMPAN -->
    <div class="modal fade" id="KonfirmasiModalTambahBarang" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiTambahBarangModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Konfirmasi</strong></h5>
                </div>
                <div class="modal-body text-center">
                    <p>
                        Apakah Anda Yakin Ingin Menyimpan?
                    </p>
                </div>
                <div class="text-center mt-3 mb-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary ms-3" style="width: 100px;" form="tambahBarang">Ya</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection