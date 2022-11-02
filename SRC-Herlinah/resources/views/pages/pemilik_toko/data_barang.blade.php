@extends('layout.pemilik_main')

@section('content')

<div class="content d-flex align-items-center flex-column">
    @if(session('status'))
    <div class="alert alert-primary w-75 text-center" role="alert">
        {{session('status')}}
    </div>
    @endif
    <h1 class="mb-5 mt-5">Data Barang</h1>

    <div class="transaction w-75">
        <a class="btn btn-primary" type="submit" name="signin" href="#">Tambah Barang</a>
        <a class="btn btn-primary" type="submit" name="signin" href="#">Tambah Stok Barang</a>

        <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
        <span id="incomeSpan" class="printReport fs-4"></span>
        <table id="tableTransactionExpense" class="display border border-dark cell-border">
            <thead>
                <tr>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Kode Barang</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Harga Beli</th>
                    <th class="text-center">Harga Jual</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">
                        <a href="">
                            <span class=" iconify" data-width="24" data-height="24" data-icon="majesticons:pencil-alt-line"></span>
                        </a>
                        <form action="" method="post">
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')">
                                <span class=" iconify" data-width="24" data-height="24" data-icon="ep:delete"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="text-center">
        <div class="card" style="width: 20rem; height: 13rem;">
            <div class="card-body">
                <h4 class="card-title">Lupa Password</h4>
                <p class="card-text">Masukkan Email Anda untuk memulihkan password Anda</p>
                <div class="input-group mt-4">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
            </div>
        </div>
    </div>
@endsection