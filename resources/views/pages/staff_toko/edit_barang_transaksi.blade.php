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
                <button type="button" class="btn btn-primary ms-3" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#KonfirmasiModalEditBarangTransaksi">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- KONFIRMASI SIMPAN -->
<div class="modal fade" id="KonfirmasiModalEditBarangTransaksi" tabindex="-1" role="dialog" aria-labelledby="KonfirmasiEditBarangTransaksiModalTitle" aria-hidden="true">
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
                <button type="button" class="btn btn-primary ms-3" style="width: 100px;">Ya</button>
            </div>
        </div>
    </div>
</div>