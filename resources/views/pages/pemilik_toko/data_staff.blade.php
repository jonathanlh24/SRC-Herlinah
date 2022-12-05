@extends('layout.pemilik_main')

@section('content')

<div class="content d-flex align-items-center flex-column">

    <!-- BERHASIL TAMBAH STAFF TOKO -->
    @if(session('successAddStaff'))
    <div class="alert alert-success w-100 text-center" role="alert">
        <strong>
            {{session('successAddStaff')}}
        </strong>
    </div>
    @endif

    <!-- BERHASIL EDIT STAFF TOKO -->
    @if(session('successEditStaff'))
    <div class="alert alert-success w-100 text-center" role="alert">
        <strong>
            {{session('successEditStaff')}}
        </strong>
    </div>
    @endif

    <!-- BERHASIL DELETE STAFF TOKO -->
    @if(session('successDeleteStaff'))
    <div class="alert alert-success w-100 text-center" role="alert">
        <strong>
            {{session('successDeleteStaff')}}
        </strong>
    </div>
    @endif

    <h2 class="mb-4 mt-3"><strong>Data Staff Toko</strong></h2>
    <div class="transaction w-75">
        <a href="/tambahStaff" class="btn btn-primary" style="width: 175px;">Tambah Staff</a>
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
                        <span class="d-flex justify-content-center">
                            <a href="/editStaff/{{$staff->id_user}}" class="btn-light border-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                            <form action="/deleteStaff/{{$staff->id_user}}" method="post" id="deleteStaffForm">
                                @csrf
                                <button type="submit" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalDeleteStaff" class="btn-light border-0" onclick="return confirm('Apakah Anda yakin untuk menghapus ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection