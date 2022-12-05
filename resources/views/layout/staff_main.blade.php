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

    <!-- Datepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: Loro;
        }
    </style>

    <title>SRC HERLINAH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class=" container-fluid mt-3 ms-5">
            <a href="/staffToko" class="text-decoration-none text-dark">
                <h3 class="fs-4 ms-5">SRC HERLINAH</h3>
            </a>
            <span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                        <li>
                            {{session('user')->nama}}
                        </li>
                        <li class="nav-item dropdown ms-4">
                            <a href="#" class="link-dark" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="avatar" class="iconify text-dark" data-inline="false" data-icon="carbon:user-filled" style="font-size: 25px"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/profileStaff">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />

                                </li>
                                <li>
                                    <a class="dropdown-item" href="/">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </span>
        </div>
    </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var tableExpense = $("#tableTransactionExpense").DataTable();
        });
    </script>

</body>

</html>