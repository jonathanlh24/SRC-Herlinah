@extends('layout.staff_main')

@section('content')


<form action="/transaksi" method="post" autocomplete="off">
    @csrf

    <div class="content d-flex align-items-center flex-column">
        <h2 class="mb-4 mt-3"><strong>Daftar Transaksi</strong></h2>
        <div class="transaction w-75">
            <div class="d-flex justify-content-between">
                <div id="reportrange" class="btn btn-secondary bg-light text-dark">
                    <span></span>
                </div>
                <button class="btn btn-primary" id="tambahtransaksi" style="width: 150px;">Tambah Transaksi</button>
            </div>
            <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
            <span id="incomeSpan" class="printReport fs-4"></span>
            <table id="tableTransactionExpense" class="table display border border-dark cell-border">
                <thead>
                    <tr>
                        <th class="text-center">ID Transaksi</th>
                        <th class="text-center">Waktu</th>
                        <th class="text-center">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Session::get('penjualans') as $penjualan)
                    @if($penjualan->total_harga > 0)
                    <tr>
                        <td>{{$penjualan->id_penjualan}}</td>
                        <td>{{$penjualan->tanggal_penjualan}}</td>
                        <td>Rp.{{$penjualan->total_harga}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        var tableIncome = $("#tableTransactionIncome").DataTable();
        var tableExpense = $("#tableTransactionExpense").DataTable();

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
            getTransactionRange($("#tableTransactionIncome").DataTable(), $("#tableTransactionExpense").DataTable(), start.format('YYYY/M/D'), end.format('YYYY/M/D'))
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });
</script>
@endsection