@extends('layout.pemilik_main')

@section('content')

<form action="/editStaff" method="post" id="editStaff">

    <!-- ALERT FORMAT EMAIL SALAH -->
    @if(session('wrongFormat'))
    <div class="alert w-100 text-center text-danger" role="alert">
        {{session('wrongFormat')}}
    </div>
    @endif

    @csrf
    <div class="container w-50">
        <div class="text-center mt-5">
            <h5 class="modal-title"><strong>Edit Staff</strong></h5>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group row">
                    <label for="inputIDStaff" class="col-sm-3 col-form-label">ID Staff</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="inputIDStaff" value="{{$staff->id_user}}" name="idStaff" readonly required>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="inputNamaStaff" class="col-sm-3 col-form-label">Nama Staff</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputNamaStaff" maxlength="45" value="{{$staff->nama}}" name="namaStaff" required>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="inputEmailStaff" class="col-sm-3 col-form-label">Email Staff</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmailStaff" maxlength="260" value="{{$staff->email}}" name="emailStaff" required>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-end mt-3 mb-3 me-3">
            <a href="/dataStaff" type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</a>
            <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalEditStaff" form="editStaff">Simpan</button>
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
                        <button type="submit" class="btn btn-primary ms-3" style="width: 100px;" form="editStaff">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection