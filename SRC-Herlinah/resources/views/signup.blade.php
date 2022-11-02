<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>SIGN UP</title>

</head>

<body>
    <div class="d-flex mt-5">
        <div class="col align-self-center mb-5">
            <h1 class="text-center text-dark">SRC</h1>
            <h1 class="text-center text-dark">HERLINAH</h1>
        </div>

        <div class="container col-5 mt-5 ">

            @if(session('error'))
            <div class="alert alert-danger w-75 text-center" role="alert">
                {{session('error')}}
            </div>
            @endif

            <form action="/signup" method="post" id="signup" autocomplete="off" class="p-3 w-75 mt-5">
                @csrf
                <h3 class="text-center">Sign Up</h3>
                <div class="input-group mt-4">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </span>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="input-group mt-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>

                <div class="input-group mt-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <div class="input-group mt-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    <input type="password" name="konpassword" class="form-control" placeholder="Konfirmasi Password" required="">
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-3">SIGN UP</button>

                <div class="mt-4 text-right">
                    <a href="/">Punya Akun</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>