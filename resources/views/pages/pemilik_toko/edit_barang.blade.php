@extends('layout.pemilik_main')

@section('content')

<form action="/editBarang" method="post" id="editBarang">
    @csrf
    <div class="container w-50">
        <div class="text-center mt-3">
            <h5 class="modal-title"><strong>Edit Barang</strong></h5>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <label for="inputIDBarang" class="col-sm-3 col-form-label">ID Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputIDBarang" value="{{$barang->id_barang}}" name="idBarang" readonly required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNamaBarang" maxlength="100" value="{{$barang->nama_barang}}" name="namaBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputStokBarang" class="col-sm-3 col-form-label">Stok Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputStokBarang" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" value="{{$barang->jumlah_stok_barang}}" name="stokBarang" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputHargaBeli" class="col-sm-3 col-form-label">Harga Beli</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputHargaBeli" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;" value="{{$barang->harga_beli}}" name="hargaBeli" required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputHargaJual" class="col-sm-3 col-form-label">Harga Jual</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputHargaJual" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9) return false;" value="{{$barang->harga_jual}}" name="hargaJual" required>
                </div>
            </div>
        </div>
        <div class="text-end mt-3 mb-3 me-3">
            <a href="/dataBarang" type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</a>
            <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalEditStaff" form="editBarang">Simpan</button>
        </div>

        <!-- KONFIRMASI SIMPAN -->
        <div class="modal fade" id="KonfirmasiModalEditStaff" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiEditStaffModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="text-center mt-3">
                        <h5 class="modal-title"><strong>Konfirmasi</strong></h5>
                    </div>
                    <div class="modal-body text-center">
                        <p>
                            Apakah Anda Yakin Ingin Menyimpan Perubahan Ini?
                        </p>
                    </div>
                    <div class="text-center mt-3 mb-3 me-3">
                        <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary ms-3" style="width: 100px;" form="editBarang">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection