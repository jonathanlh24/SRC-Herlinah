@extends('layout.staff_main')

@section('content')

<form action="/tambahtransaksi" method="post" id="" autocomplete="off">
    <div class="content d-flex align-items-center flex-column">
        <h1 class="mb-3 mt-3">Daftar Transaksi</h1>
        <div class="transaction w-75">
            <div class="d-grid gap-2 d-md-flex">
                <button class="btn btn-primary" type="submit" name="datepicker" href="#">Untuk Range Waktu</button>
                <button class="btn btn-primary float-right" type="submit" name="tambahtransaksi">Tambah Transaksi</button>
            </div>
            <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
            <span id="incomeSpan" class="printReport fs-4"></span>
            <table id="tableTransactionExpense" class="display border border-dark cell-border">
                <thead>
                    <tr>
                        <th class="text-center">ID Transaksi</th>
                        <th class="text-center">Waktu</th>
                        <th class="text-center">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</form>

@endsection