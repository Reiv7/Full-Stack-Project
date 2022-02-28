@extends('layouts.main')
@section('title')
    Category
@endsection
@section('content')
<div class="py-3 mb-4 shadow-lg bg-warning">
    <div class="container">
        <h5>
        <a href="{{ url('/') }}">
            Home
        </a>
        /
        <a href="{{ url('category') }}">
            Category
        </a>
        </h5>
    </div>
</div>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <style>
                            h1 , h4 , h5{
                                font:bold;
                                font-weight:bolder;
                                background: -webkit-radial-gradient(rgb(97, 10, 97), rgb(230, 142, 230));
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }
                        </style>

                        <h1 class="text-center text-white mb-4">All Categories</h1>
                        @foreach ($category as $cate)
                            <div class="col-md-3 mb-4">
                                <div class="card h-100">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="{{ asset('uploads/category/'.$cate->img) }}" class="img-fluid rounded" style="height:350px; width:320px" alt="category-img">
                                        <a href="{{ url('category/'.$cate->subcategories) }}">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </a>
                                    </div>
                                    <div class="card-body justify-content-center ">
                                        <h4 class="card-title justify-content-start"  style="font:bold; font-weight:bolder;">{{ $cate->name }}</h4>
                                        <p class="card-text justify-content-start text-start"><small>{{ $cate->dscrp }}</small></p>
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
