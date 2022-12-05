@extends('layout.pemilik_main')

@section('content')

<form action="/viewReport" method="post" id="" autocomplete="off" class="p-3 mt-5">
    @csrf
    <div class="d-flex justify-content-around mt-5 align-items-center">
        <div class="text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Staff Toko</h5>
                    <p class="card-text fs-1">{{$staffs}}</p>
                    <a href="/dataStaff">Data Staff</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Barang</h5>
                    <p class="card-text fs-1">{{$barangs}}</p>
                    <a href="/dataBarang">Data Barang</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary btn-block mt-3">View Report</button>
        </div>
    </div>
</form>

@endsection