<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{asset('assets/css/style.css')}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <title>SRC HERLINAH</title>
</head>

<body>
    <div class="d-flex w-25">
        <div class="col mt-3">
            <h4 class="text-center text-dark mt-2"><strong>SRC HERLINAH</strong></h4>
            <h5 class="text-center text-dark"><strong>Jl. CIMANUK NO. 145 GARUT</strong></h5>

            <form action="/struk" method="post" id="struk" autocomplete="off" class="p-3 w-75">
                <span id="expenseSpan" class="printReport d-block fs-4"></span>
                <span id="incomeSpan" class="printReport fs-4"></span>
                <table>
                    <thead>
                        <tr>
                            <th>No Transaksi</th>
                            <td> : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td> : </td>
                            <td> </td>
                        </tr>
                    </thead>
                </table>
                <table id="tableTransactionExpense" class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Barang</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
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
                <table>
                    <thead>
                        <tr>
                            <th>Total</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th>Bayar</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Kembalian</th>
                            <td></td>
                        </tr>
                    </thead>
                </table>
                <p class="text-center text-dark mt-5">Barang yang telah dibeli tidak dapat ditukar / dikembalikan.</p>
            </form>
        </div>
    </div>
</body>

</html>