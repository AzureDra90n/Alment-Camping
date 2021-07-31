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

            <div class="card border-dark" style="width: 18rem;">

                {{-- <img src="{{ $detailBrg->Foto_Brg }}" class="card-img-top" alt="..."> --}}

                <div class="card-body">
                    
                    {{ $detailBrg }}
                  
                  <a href="equipments-main" class="btn btn-outline-warning">Back</a>
                </div>

            </div>

        </div>
 
    </div>
</div>
    
@endsection