@extends('layout.pemilik_main')

@section('content')

<form method="post" id="" autocomplete="off">
    <div class="content d-flex align-items-center flex-column">
        <h2 class="mb-3 mt-5"><strong>Laporan</strong></h2>
        <div class="transaction w-75">
            <div class="d-flex justify-content-between">
                <div id="reportrange" class="btn btn-secondary bg-light text-dark">
                    <span></span>
                </div>
                <button class="btn btn-primary" id="print">Cetak</button>
            </div>
            <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
            <span id="incomeSpan" class="printReport fs-4"></span>
            <table id="tableTransactionExpense" class="table display border border-dark cell-border">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 150px;">ID Transaksi</th>
                        <th class="text-center" style="width: 150px;">Waktu</th>
                        <th class="text-center" style="width: 150px;">Total Harga</th>
                        <th class="text-center" style="width: 75px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>Barang Paling Laris</td>
                    <td>:</td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Pengeluaran</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pendapatan</td>
                    <td>:</td>
                    <td></td>
                </tr>
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