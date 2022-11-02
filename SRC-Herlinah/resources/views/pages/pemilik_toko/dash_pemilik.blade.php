@extends('layout.pemilik_main')

@section('content')

<div class="d-flex justify-content-around mt-5 align-items-center">
    <div>
        <form action="/staffToko" method="post" id="staffToko" autocomplete="off" class="p-3 w-75 mt-5">
            @csrf
            <div class="text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Staff Toko</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Data Staff >></a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div>
        <form action="/staffToko" method="post" id="staffBarang" autocomplete="off" class="p-3 w-75 mt-5">
            @csrf
            <div class="text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Barang</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Data Barang >></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container my-3">
    <div class="col-md-12 text-center mt-5">
        <button type="button" class="btn btn-primary">View Report</button>
    </div>
</div>

</body>
@endsection