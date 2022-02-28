@extends('layouts.main')
@section('title')
    {{ $category->name }}
@endsection
@section('content')
    <style>
        h1 , h4 , h5{
            font:bold;
            font-weight:bolder;
            background: -webkit-radial-gradient(rgb(97, 10, 97), rgb(230, 142, 230));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <div class="py-3 mb-4 shadow-lg bg-warning">
        <div class="container">
            <h5 class="mb-0 fw-bolder"><a href="{{ url('/') }}">
                Collection
            </a>
            /
            <a href="{{ url('category') }}">
                {{ $category->name }}
            </a>
            </h5>

        </div>
    </div>
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row">

                            <h1 class="text-center text-white mb-4">{{ $category->name }}</h1>
                            @foreach ($products as $prod)
                                <div class="col-md-3 mb-4 justify content center">
                                    <div class="card h-100">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="{{ asset('uploads/products/'.$prod->img) }}" class="img-fluid rounded" style="height:350px; width:320px" alt="product-img">
                                            <a href="{{ url('category/'.$category->subcategories.'/'.$prod->subcategories) }}">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body justify-content-center ">
                                            <h4 class="card-title justify-content-start"  style="font:bold; font-weight:bolder;">{{ $prod->name }}</h4>
                                            <p>{{ $prod->smol_dscrp }}</p>
                                            <span class="float-start">{{ $prod->s_price }}</span>
                                            <span class="float-end"><s>{{ $prod->o_price }}</s></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
