@extends('layouts.app')

@section('title', 'ALMENT CAMPING | Deskrispi')

@section('content')
    <div class="container">
        <div class="mt-5 text-decoration-underline">
            <h1 class="text-center">
                Deskripsi Barang
            </h1>
        </div>

        <div class="col d-flex justify-content-center flex-wrap">
            <div class="col d-flex justify-content-center mt-5">

                <div class="card border-dark" style="width: 24rem;">
                    <div class="card" style="width: 24rem;">
                        <img src="{{ $detailBrg->Foto_Brg }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="text-center">{{ $detailBrg->Nama_Brg }}</h1>
                            <p class="card-text">
                                {{ $detailBrg->Deskripsi }}
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
