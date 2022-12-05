@extends('layout.staff_main')

@section('content')

<form action="/simpanTransaksi" method="post" id="simpanTS">
    @csrf
    <div class="content d-flex align-items-center flex-column">
        <h2 class="mb-4 mt-3"><strong>Transaksi</strong></h2>
        <div class="transaction w-75">
            <input type="hidden" value="{{session('penjualan')}}" name="idPenjualan">

            <div class="d-flex">
                <a href="/tambahBarangTransaksi" class="btn btn-primary" style="width: 175px;" name="tambahBarangTransaksi">Tambah Barang</a>
            </div>
            <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
            <span id="incomeSpan" class="printReport fs-4"></span>
            <table id="tableTransactionExpense" class="display border border-dark cell-border">
                <thead>
                    <tr>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Sub Total</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barangs as $barang)
                    <tr>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->jumlah_barang}}</td>
                        <td>{{$barang->harga_jual}}</td>
                        <td class="text-center">
                            <span>
                                <button data-bs-toggle="modal" data-bs-target="#ModalEditBarangTransaksi" class="btn-light border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#KonfirmasiModalDeleteBarang" class="btn-light border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                </button>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="text-end mt-3">Total : </p>
            <button type="button" class="btn btn-primary" style="width: 175px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalSimpanTransaksi">Simpan Transaksi</button>
        </div>

        <!-- KONFIRMASI SIMPAN -->
        <div class="modal fade text-center" id="KonfirmasiModalSimpanTransaksi" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiModalSimpanTransaksi" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="text-center mt-3">
                        <h5 class="modal-title"><strong>Konfirmasi</strong></h5>
                    </div>
                    <div class="modal-body text-center">
                        <p>
                            Apakah Anda Yakin Ingin Menyimpan Transaksi Ini?
                        </p>
                    </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-primary" style="width: 175px;" form="simpanTS">Simpan Tidak Print</button>
                        <button type="submit" class="btn btn-primary ms-3" style="width: 175px;">Simpan Print</button>
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn btn-primary" style="width: 175px;" data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection