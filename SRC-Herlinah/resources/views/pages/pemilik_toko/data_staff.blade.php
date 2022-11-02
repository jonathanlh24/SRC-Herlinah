@extends('layout.pemilik_main')

@section('content')

<div class="content d-flex align-items-center flex-column">
    @if(session('status'))
    <div class="alert alert-primary w-75 text-center" role="alert">
        {{session('status')}}
    </div>
    @endif
    <h1 class="mb-5 mt-5">Data Staff</h1>

    <div class="transaction w-75">

        <span id="expenseSpan" class="printReport d-block mt-3 fs-4"></span>
        <span id="incomeSpan" class="printReport fs-4"></span>
        <table id="tableTransactionExpense" class="display border border-dark cell-border">
            <thead>
                <tr>
                    <th class="text-center">ID Staff</th>
                    <th class="text-center">Nama Staff</th>
                    <th class="text-center">Email Staff</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">
                        <a href="">
                            <span class=" iconify" data-width="24" data-height="24" data-icon="majesticons:pencil-alt-line"></span>
                        </a>
                        <form action="" method="post">
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')">
                                <span class=" iconify" data-width="24" data-height="24" data-icon="ep:delete"></span>
                            </button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection