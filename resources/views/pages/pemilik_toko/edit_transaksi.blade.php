@extends('layout.pemilik_main')

@section('content')


<div class="content d-flex align-items-center flex-column">
    <h2 class="mb-4 mt-3"><strong>Data Barang</strong></h2>
    <div class="transaction w-75">
        <button type="button" class="btn btn-primary" style="width: 175px;" data-bs-toggle="modal" data-bs-target="#ModalTambahBarang">Tambah Barang</button>
        <button type="button" class="btn btn-primary ms-3" style="width: 175px;" data-bs-toggle="modal" data-bs-target="#ModalTambahStokBarang">Tambah Stok Barang</button>
        <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
        <span id="incomeSpan" class="printReport fs-4"></span>
    </div>
</div>
@endsection