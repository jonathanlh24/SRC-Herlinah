@extends('layout.staff_main')

@section('content')

<form action="/tambahBarangTransaksi" method="post" id="tambahBarangTransaksi">
    @csrf
    <div class="container w-50">
        <div class="text-center mt-3">
            <h3><strong>Tambah Barang</strong></h3>
        </div>
        <div class="mt-4">
            <div class="form-group row mt-2">
                <input type="hidden" value="{{session('penjualan')}}" name="idPenjualan">

                
                <label for="inputNamaBarangTransaksi" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" list="namaBarang" id="inputNamaBarang" placeholder="Masukkan Nama Barang" maxlength="100" name="namaBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputStokBarangTransaksi" class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputStokBarang" placeholder="Masukkan Jumlah Stok" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" name="stokBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputHargaBarangTransaksi" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputHargaJual" placeholder="" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;" name="hargaJual" required>
                </div>
            </div>
            <div class="text-end mt-2 mb-2 me-3">
                <a href="/transaksi" type="button" class="btn btn-primary" style="width: 100px;">Batal</a>
                <button type="button" class="btn btn-primary ms-3" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalTambahBarangTransaksi">Simpan</button>
            </div>
        </div>
    </div>

    <!-- KONFIRMASI SIMPAN -->
    <div class="modal fade" id="KonfirmasiModalTambahBarangTransaksi" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiTambahBarangTransaksiModalTitle" aria-hidden="true">
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
                    <button type="submit" class="btn btn-primary ms-3" style="width: 100px;" form="tambahBarangTransaksi">Ya</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection