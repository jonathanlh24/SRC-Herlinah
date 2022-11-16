@extends('layout.staff_main')

@section('content')

<form action="/" method="post" id="" autocomplete="off">
    <div class="content d-flex align-items-center flex-column">
        <h1 class="mb-3 mt-3">Transaksi</h1>
        <div class="transaction w-75">
            <div class="d-grid gap-2 d-md-flex">
                <button class="btn btn-primary float-right" type="submit" name="tambahtransaksi">Tambah Barang</button>
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p class="text-end mt-3">Transaksi : </p>
            <button class="btn btn-primary" type="submit" name="tambahtransaksi">Simpan Transaksi</button>
        </div>
    </div>
</form>

<!-- Tambah Barang -->
<div class="modal fade" id="ModalTambahBarangTransaksi" tabindex="-1" role="dialog" aria-labelledby="TambahBarangTraksaksiModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-center mt-3">
                <h5 class="modal-title"><strong>Tambah Barang</strong></h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row mt-2">
                        <label for="inputNamaBarangTransaksi" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputNamaBarangTransaksi" placeholder="Masukkan Nama Barang" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputStokBarangTransaksi" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputStokBarangTransaksi" placeholder="Masukkan Jumlah Barang" name="" min="1" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="inputHargaBarangTransaksi" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputHargaBarangTransaksi" name="" min="1" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-end mt-2 mb-2 me-3">
                <button type="button" class="btn btn-primary" style="width: 100px;">Batal</button>
                <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Barang -->
<div class="modal fade" id="ModalEditBarangTransaksi" tabindex="-1" role="dialog" aria-labelledby="TambahBarangTransaksiModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-center mt-3">
                <h5 class="modal-title"><strong>Edit Barang</strong></h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row mt-2">
                        <label for="EditNamaBarangTransaksi" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="EditNamaBarangTransaksi" placeholder="Masukkan Nama Barang" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="EditStokBarangTransaksi" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="EditStokBarangTransaksi" placeholder="Masukkan Jumlah Barang" name="" min="1" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="EditHargaBarangTransaksi" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="EditHargaBarangTransaksi" name="" min="1" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-end mt-2 mb-2 me-3">
                <button type="button" class="btn btn-primary" style="width: 100px;">Batal</button>
                <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection