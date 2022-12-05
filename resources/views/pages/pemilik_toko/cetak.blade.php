<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.css" />

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: Loro;
        }

        /* * table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        } */

        * th,
        td {
            padding: 5px;
        }
    </style>

    <title>SRC HERLINAH</title>
</head>

<body>
    <div class="content d-flex align-items-center flex-column">
        <h2 class="mt-3"><strong>SRC HERLINAH</strong></h2>
        <h6><strong>Jl. CIMANUK NO.145 GARUT</strong></h6>
    </div>

    <body>
        <div class="content d-flex align-items-center flex-column">
            <div class="transaction w-50">
                <span id="expenseSpan" class="d-block mt-3 fs-4"></span>
                <span id="incomeSpan" class="fs-4"></span>
                <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
                <span id="incomeSpan" class="printReport fs-4"></span>
                <table id="tableTransactionExpense" class="table display border border-dark cell-border">
                    <tr>
                        <td>
                            <p>No</p>
                        </td>
                        <td>
                            <table>
                                <tr class="mt-2 border border-secondary">
                                    <th>ID Transaksi</th>
                                    <th>Waktu</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>ASDASD</td>
                                    <td>ASDASD</td>
                                    <td>ASDASDA</td>
                                </tr>
                            </table>
                            <table class="mt-2 border border-secondary">
                                <tr>
                                    <th class="border border-secondary">Nama Barang</th>
                                    <th class="border border-secondary">Jumlah Stok</th>
                                    <th class="border border-secondary">Harga Beli</th>
                                    <th class="border border-secondary">Harga Jual</th>
                                    <th class="border border-secondary">Sub Total</th>
                                </tr>
                                <tr>
                                    <td class="border border-secondary">asd</td>
                                    <td class="border border-secondary">asd</td>
                                    <td class="border border-secondary">asd</td>
                                    <td class="border border-secondary">asd</td>
                                    <td class="border border-secondary">asd</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>

</html>

</body>