<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.css" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>

    <title>SRC HERLINAH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class=" container-fluid mt-3 ms-5">
            <a href="" class="text-decoration-none text-dark">
                <h3 class="fs-4 ms-5">SRC HERLINAH</h3>
            </a>
            <span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="avatar" class="iconify text-dark" data-inline="false" data-icon="carbon:user-filled" style="font-size: 25px"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/Profile">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"/>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var tableExpense = $("#tableTransactionExpense").DataTable();
        });
    </script>

</body>

</html>