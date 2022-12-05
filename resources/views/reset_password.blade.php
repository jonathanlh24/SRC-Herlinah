<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{asset('assets/css/style.css')}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <title>Reset Password</title>

</head>

<body>
    <div class="content d-flex align-items-center flex-column">
        <h5 class="modal-title mt-5"><strong>Reset Password</strong></h5>
        <div class="w-25">
            <form action="#" method="post">
                <div class="mb-3 mt-4">
                    <label for="inputPasswordBaru" class="form-label">Password Baru</label>
                    <div class="input-group">
                        <input name="password" type="password" value="" class="input form-control" id="passbaru" placeholder="Masukkan Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="passwordbaru_show_hide();">
                                <i class="fas fa-eye" id="show_eye_passbaru"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M11.83 9L15 12.16V12a3 3 0 0 0-3-3h-.17m-4.3.8l1.55 1.55c-.05.21-.08.42-.08.65a3 3 0 0 0 3 3c.22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53a5 5 0 0 1-5-5c0-.79.2-1.53.53-2.2M2 4.27l2.28 2.28l.45.45C3.08 8.3 1.78 10 1 12c1.73 4.39 6 7.5 11 7.5c1.55 0 3.03-.3 4.38-.84l.43.42L19.73 22L21 20.73L3.27 3M12 7a5 5 0 0 1 5 5c0 .64-.13 1.26-.36 1.82l2.93 2.93c1.5-1.25 2.7-2.89 3.43-4.75c-1.73-4.39-6-7.5-11-7.5c-1.4 0-2.74.25-4 .7l2.17 2.15C10.74 7.13 11.35 7 12 7Z" />
                                    </svg></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye_passbaru"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5Z" />
                                    </svg></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputKonfirmasiPasswordBaru" class="form-label">Konfirmasi Password Baru</label>
                    <div class="input-group">
                        <input name="inputKonfirmasiPasswordBaru" type="password" value="" class="input form-control" id="konfirmasipassbaru" placeholder="Konfirmasi Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="konfirmasipasswordbaru_show_hide();">
                                <i class="fas fa-eye" id="show_eye_konfirmasipassbaru"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M11.83 9L15 12.16V12a3 3 0 0 0-3-3h-.17m-4.3.8l1.55 1.55c-.05.21-.08.42-.08.65a3 3 0 0 0 3 3c.22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53a5 5 0 0 1-5-5c0-.79.2-1.53.53-2.2M2 4.27l2.28 2.28l.45.45C3.08 8.3 1.78 10 1 12c1.73 4.39 6 7.5 11 7.5c1.55 0 3.03-.3 4.38-.84l.43.42L19.73 22L21 20.73L3.27 3M12 7a5 5 0 0 1 5 5c0 .64-.13 1.26-.36 1.82l2.93 2.93c1.5-1.25 2.7-2.89 3.43-4.75c-1.73-4.39-6-7.5-11-7.5c-1.4 0-2.74.25-4 .7l2.17 2.15C10.74 7.13 11.35 7 12 7Z" />
                                    </svg></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye_konfirmasipassbaru"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5Z" />
                                    </svg></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary" name="btnReset">Reset Password</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="content d-flex align-items-center flex-column mt-3">
        <h5 class="modal-title"><strong>Berhasil Reset Password</strong></h5>
    </div> -->
</body>

</html>
<script>
    function passwordbaru_show_hide() {
        var passbaru = document.getElementById("passbaru");
        var show_eye = document.getElementById("show_eye_passbaru");
        var hide_eye = document.getElementById("hide_eye_passbaru");
        hide_eye.classList.remove("d-none");
        if (passbaru.type == "password") {
            passbaru.type = "text";
            show_eye_passbaru.style.display = "none";
            hide_eye_passbaru.style.display = "block";
        } else {
            passbaru.type = "password";
            show_eye_passbaru.style.display = "block";
            hide_eye_passbaru.style.display = "none";
        }
    }

    function konfirmasipasswordbaru_show_hide() {
        var konfirmasipassbaru = document.getElementById("konfirmasipassbaru");
        var show_eye = document.getElementById("show_eye_konfirmasipassbaru");
        var hide_eye = document.getElementById("hide_eye_konfirmasipassbaru");
        hide_eye.classList.remove("d-none");
        if (konfirmasipassbaru.type == "password") {
            konfirmasipassbaru.type = "text";
            show_eye_konfirmasipassbaru.style.display = "none";
            hide_eye_konfirmasipassbaru.style.display = "block";
        } else {
            konfirmasipassbaru.type = "password";
            show_eye_konfirmasipassbaru.style.display = "block";
            hide_eye_konfirmasipassbaru.style.display = "none";
        }
    }
</script>