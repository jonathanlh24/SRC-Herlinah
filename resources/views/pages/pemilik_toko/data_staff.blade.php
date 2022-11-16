@extends('layout.pemilik_main')

@section('content')

<div class="content d-flex align-items-center flex-column">
    <h2 class="mb-3 mt-5"><strong>Data Staff</strong></h2>
    <div class="transaction w-75">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahStaff" style="width: 175px;">Tambah Staff</button>
        <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
        <span id="incomeSpan" class="printReport fs-4"></span>
        <table id="tableTransactionExpense" class="table display border border-dark cell-border">
            <thead>
                <tr>
                    <th class="text-center" style="width: 75px;">ID Staff</th>
                    <th class="text-center">Nama Staff</th>
                    <th class="text-center">Email Staff</th>
                    <th class="text-center" style="width: 75px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($staffs as $staff)
                    <td>{{$staff->id_user}}</td>
                    <td>{{$staff->nama}}</td>
                    <td>{{$staff->email}}</td>
                    <td class="text-center">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#ModalEditStaff">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                            <a class="ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambah Staff -->
    <div class="modal fade" id="ModalTambahStaff" tabindex="-1" role="dialog" aria-labelledby="TambahStaffModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Tambah Staff</strong></h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputIDStaff" class="col-sm-3 col-form-label">ID Staff</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputIDStaff" placeholder="Masukkan ID Staff" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputNamaStaff" class="col-sm-3 col-form-label">Nama Staff</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNamaStaff" placeholder="Masukkan Nama Staff" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmailStaff" class="col-sm-3 col-form-label">Email Staff</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmailStaff" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-end mt-3 mb-3 me-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Edit Staff -->
    <div class="modal fade" id="ModalEditStaff" tabindex="-1" role="dialog" aria-labelledby="EditStaffModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Edit Staff</strong></h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputIDStaff" class="col-sm-3 col-form-label">ID Staff</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputIDStaff" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputNamaStaff" class="col-sm-3 col-form-label">Nama Staff</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNamaStaff" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputEmailStaff" class="col-sm-3 col-form-label">Email Staff</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmailStaff" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-end mt-3 mb-3 me-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection