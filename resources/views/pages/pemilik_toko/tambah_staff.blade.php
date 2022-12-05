@extends('layout.pemilik_main')

@section('content')

<form action="/tambahStaff" method="post" id="tambahStaff">

    <!-- ALERT ID STAFF & EMAIL TELAH ADA -->
    @if(session('failedAddStaff'))
    <div class="alert  alert-danger w-100 text-center" role="alert">
        {{session('failedAddStaff')}}
    </div>
    @endif

    <!-- ALERT FORMAT EMAIL SALAH -->
    @if(session('wrongFormat'))
    <div class="alert  alert-danger w-100 text-center" role="alert">
        {{session('wrongFormat')}}
    </div>
    @endif

    @csrf
    <div class="container w-50">
        <div class="text-center mt-3">
            <h3><strong>Tambah Staff</strong></h3>
        </div>
        <div class="mt-4">
            <div class="form-group row">
                <label for="inputIDStaff" class="col-sm-3 col-form-label">ID Staff</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputIDStaff" placeholder="Masukkan ID Staff" min="1" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" name="idStaff" required>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label for="inputNamaStaff" class="col-sm-3 col-form-label">Nama Staff</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNamaStaff" placeholder="Masukkan Nama Staff" maxlength="45" name="namaStaff" required>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label for="inputEmailStaff" class="col-sm-3 col-form-label">Email Staff</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmailStaff" placeholder="Masukkan Email Staff" maxlength="260" name="emailStaff" required>
                </div>
            </div>
        </div>
        <div class="text-end mt-3 mb-3 me-3">
            <a href="/dataStaff" type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</a>
            <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalTambahStaff">Simpan</button>
        </div>
    </div>

    <!-- KONFIRMASI SIMPAN -->
    <div class="modal fade" id="KonfirmasiModalTambahStaff" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiTambahStaffModalTitle" aria-hidden="true">
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
                    <button type="submit" class="btn btn-primary ms-3" style="width: 100px;" form="tambahStaff">Ya</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection