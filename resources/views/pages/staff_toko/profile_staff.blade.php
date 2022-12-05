@extends('layout.staff_main')

@section('content')

<form action="/profileStaff" method="post">
    @csrf

    <div class="d-flex-column align-items-center">
        <div class="text-center mb-3 mt-5">
            <h3><strong>Profile</strong></h3>
        </div>
        <div class="container col-4 mt-5 mb-3">
            <div class="form-group row">
                <input type="hidden" value="{{session('user')->email}}" name="oldEmail">

                <!-- ALERT FORMAT EMAIL SALAH -->
                @if(session('error'))
                <div class="alert w-100 text-center text-danger bg-primary" role="alert">
                    {{session('error')}}
                </div>
                @endif

                <label for="inputNamaPemilik" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNama" value="{{session('user')->nama}}" name="nama" maxlength="20" readonly required>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="inputEmailPemilik" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" value="{{session('user')->email}}" name="email" maxlength="260" readonly required>
                </div>
            </div>
            <div class="text-end mt-5 mb-3" id="editProfile">
                <button type="button" class="btn btn-primary" style="width: 150px;" onclick="editProfile()">Edit Profile</button>
                <button type="button" class="btn btn-primary ms-2" style="width: 150px;" data-bs-toggle="modal" data-bs-target="#ModalGantiPassword">Ganti Password</button>
            </div>
            <div class="text-end mt-5 mb-3 d-none" id="saveProfile">
                <button type="button" class="btn btn-primary" style="width: 150px;" onclick="cancelProfile()">Batal</button>
                <button type="submit" class="btn btn-primary ms-2" style="width: 150px;" onclick="saveProfile()">Simpan</button>
            </div>
        </div>
    </div>
</form>

<!-- GANTI PASSWORD -->
<div class="modal fade" id="ModalGantiPassword" tabindex="-1" role="dialog" aria-labelledby="GantiPasswordModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="text-center mt-3">
                <h5 class="modal-title"><strong>Ganti Password</strong></h5>
            </div>
            <form action="/gantiPasswordStaff" method="post">
                @csrf

                <div class="modal-body">
                    <input type="hidden" value="{{session('user')->email}}" name="gantipassword">

                    <!-- ALERT GANTI PASSWORD -->
                    @if(session('errorGantipassword'))
                    <div class="alert w-100 text-center text-danger bg-primary" role="alert">
                        {{session('errorGantipassword')}}
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="inputPasswordLama" class="form-label">Password Lama</label>
                        <div class="input-group">
                            <input name="passlama" type="password" value="" class="input form-control" id="passlama" placeholder="Masukkan Password Lama" required="true" aria-label="password" aria-describedby="basic-addon1" maxlength="16" />
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="passwordlama_show_hide();">
                                    <i class="fas fa-eye" id="show_eye_passlama"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M11.83 9L15 12.16V12a3 3 0 0 0-3-3h-.17m-4.3.8l1.55 1.55c-.05.21-.08.42-.08.65a3 3 0 0 0 3 3c.22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53a5 5 0 0 1-5-5c0-.79.2-1.53.53-2.2M2 4.27l2.28 2.28l.45.45C3.08 8.3 1.78 10 1 12c1.73 4.39 6 7.5 11 7.5c1.55 0 3.03-.3 4.38-.84l.43.42L19.73 22L21 20.73L3.27 3M12 7a5 5 0 0 1 5 5c0 .64-.13 1.26-.36 1.82l2.93 2.93c1.5-1.25 2.7-2.89 3.43-4.75c-1.73-4.39-6-7.5-11-7.5c-1.4 0-2.74.25-4 .7l2.17 2.15C10.74 7.13 11.35 7 12 7Z" />
                                        </svg></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye_passlama"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5Z" />
                                        </svg></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="inputPasswordBaru" class="form-label">Password Baru</label>
                            <div class="input-group">
                                <input name="passbaru" type="password" value="" class="input form-control" id="passbaru" placeholder="Masukkan Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" maxlength="16" />
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
                                <input name="konfirmasipassbaru" type="password" value="" class="input form-control" id="konfirmasipassbaru" placeholder="Konfirmasi Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" maxlength="16"/>
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
                    </div>
                    <div class="text-end mt-3 me-3">
                        <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary ms-3" style="width: 100px;">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var defaultsNama = document.getElementById("inputNama").value;
    var defaultsEmail = document.getElementById("inputEmail").value;

    function editProfile() {
        var nama = document.getElementById("inputNama");
        var email = document.getElementById("inputEmail");
        var editProfile = document.getElementById("editProfile");
        var saveProfile = document.getElementById("saveProfile");
        editProfile.classList.toggle('d-none');
        saveProfile.classList.toggle('d-none');
        nama.toggleAttribute('readonly');
        email.toggleAttribute('readonly');
    }

    function saveProfile() {
        var nama = document.getElementById("inputNama");
        var email = document.getElementById("inputEmail");
        var editProfile = document.getElementById("editProfile");
        var saveProfile = document.getElementById("saveProfile");
        editProfile.classList.toggle('d-none');
        saveProfile.classList.toggle('d-none');
        nama.toggleAttribute('readonly');
        email.toggleAttribute('readonly');
    }

    function cancelProfile() {
        var nama = document.getElementById("inputNama");
        var email = document.getElementById("inputEmail");
        var editProfile = document.getElementById("editProfile");
        var saveProfile = document.getElementById("saveProfile");
        editProfile.classList.toggle('d-none');
        saveProfile.classList.toggle('d-none');
        nama.value = defaultsNama;
        email.value = defaultsEmail;
        nama.toggleAttribute('readonly');
        email.toggleAttribute('readonly');
    }

    function passwordlama_show_hide() {
        var passlama = document.getElementById("passlama");
        var show_eye = document.getElementById("show_eye_passlama");
        var hide_eye = document.getElementById("hide_eye_passlama");
        hide_eye.classList.remove("d-none");
        if (passlama.type == "password") {
            passlama.type = "text";
            show_eye_passlama.style.display = "none";
            hide_eye_passlama.style.display = "block";
        } else {
            passlama.type = "password";
            show_eye_passlama.style.display = "block";
            hide_eye_passlama.style.display = "none";
        }
    }

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

@endsection