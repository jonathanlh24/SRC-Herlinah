@extends('layout.pemilik_main')

@section('content')

<div class="content d-flex align-items-center flex-column">
    <h2 class="mb-3 mt-5"><strong>Data Barang</strong></h2>
    <div class="transaction w-75">
        <button type="button" class="btn btn-primary" style="width: 175px;" data-bs-toggle="modal" data-bs-target="#ModalTambahBarang">Tambah Barang</button>
        <button type="button" class="btn btn-primary ms-3" style="width: 175px;" data-bs-toggle="modal" data-bs-target="#ModalTambahStokBarang">Tambah Stok Barang</button>
        <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
        <span id="incomeSpan" class="printReport fs-4"></span>
        <table id="tableTransactionExpense" class="table display border border-dark cell-border">
            <thead>
                <tr>
                    <th class="text-center">Kode Barang</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Harga Beli</th>
                    <th class="text-center">Harga Jual</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                <tr>
                    <td>{{$barang->id_barang}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->jumlah_stok_barang}}</td>
                    <td>Rp.{{$barang->harga_beli}}</td>
                    <td>Rp.{{$barang->harga_jual}}</td>
                    <td class="text-center">
                        <span>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                            <a href="" class="ms-3">
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

    <!-- Tambah Barang -->
    <div class="modal fade" id="ModalTambahBarang" tabindex="-1" role="dialog" aria-labelledby="TambahBarangModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Tambah Barang</strong></h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputIDBarang" class="col-sm-3 col-form-label">ID Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputIDBarang" placeholder="Masukkan ID Barang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNamaBarang" placeholder="Masukkan Nama Barang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputStokBarang" class="col-sm-3 col-form-label">Stok Barang</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputStokBarang" placeholder="Masukkan Jumlah Stok" name="" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputHargaBeli" class="col-sm-3 col-form-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputHargaBeli" placeholder="Masukkan Harga Beli" name="" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputHargaJual" class="col-sm-3 col-form-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputHargaJual" placeholder="Masukkan Harga Jual" name="" min="1" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-end mt-2 mb-2 me-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Barang -->
    <div class="modal fade" id="ModalEditBarang" tabindex="-1" role="dialog" aria-labelledby="EditBarangModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Edit Barang</strong></h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputIDBarang" class="col-sm-3 col-form-label">ID Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputIDBarang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNamaBarang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputStokBarang" class="col-sm-3 col-form-label">Stok Barang</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputStokBarang" name="" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputHargaBeli" class="col-sm-3 col-form-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputHargaBeli" name="" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputHargaJual" class="col-sm-3 col-form-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputHargaJual" name="" min="1" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-end mt-2 mb-2 me-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Stok Barang -->
    <div class="modal fade" id="ModalTambahStokBarang" tabindex="-1" role="dialog" aria-labelledby="TambahStokBarangModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center mt-3">
                    <h5 class="modal-title"><strong>Tambah Stok Barang</strong></h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputIDBarang" class="col-sm-3 col-form-label">ID Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputIDBarang" placeholder="Masukkan ID Barang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNamaBarang" placeholder="Masukkan Nama Barang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputTambahStokBarang" class="col-sm-3 col-form-label">Stok Barang</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputTambahStokBarang" placeholder="Masukkan Jumlah Stok" name="" min="1" required>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="inputNewHargaBeli" class="col-sm-3 col-form-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputNewHargaBeli" placeholder="Masukkan Harga Beli" name="" min="1" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-end mt-2 mb-2 me-3">
                    <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection