@extends('layouts.admin')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-5 col-md-10 mx-auto">
        <div class="card mt-2 px-2">
            @if (Auth::user()->role_as == '1')
          <div class="card-header p-3 mb-2">
            <h5 class="mb-0 text-center">Edit-Update Product</h5>
          </div>
          <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form6Example1" value="{{ $products->name}}" name="name"  class="form-control" />
                        <label class="form-label" for="form6Example1">Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" value="{{ $products->subcategories}}" name="subcategories"  class="form-control" />
                            <label class="form-label" for="form6Example1">Subcategories</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select class="form-select form-select-sm">
                        <option value="">{{ $products->category->name }}</option>
                    </select>
                </div>
            </div>
            <div class="row row-cols-2">
                    <div class="col">
                        <div class="form-outline mb-2 col">
                            <input type="number" id="typenumber" value="{{ $products->o_price}}" name="o_price"  class="form-control" />
                            <label class="form-label" for="form6Example1">Original Price</label>
                        </div>
                        <div class="form-outline mb-1 col">
                            <input type="number" id="typenumber" value="{{ $products->s_price}}" name="s_price"  class="form-control" />
                            <label class="form-label" for="form6Example1">Selling Price</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline mb-2 col">
                            <input type="number" id="typenumber" value="{{ $products->qty}}" name="qty"  class="form-control" />
                            <label class="form-label" for="typenumber">Quantity</label>
                        </div>
                        <div class="form-outline mb-1 col">
                            <input type="number" id="typenumber" value="{{ $products->tax}}" name="tax"  class="form-control" />
                            <label class="form-label" for="form6Example1">Tax</label>
                        </div>
                    </div>
            <div class="">
                <div class="form-check mb-0">
                    <input class="form-check-input"  {{ $products->status == "1" ? 'checked':'' }} name="status" type="checkbox" />
                    <label class="form-check-label">Status</label>
                </div>
            </div>
            <div class="">
                <div class="form-check mb-0">
                    <input class="form-check-input" {{ $products->trending == "1" ? 'checked':'' }} name="trending" type="checkbox" />
                    <label class="form-check-label">Trending</label>
                </div>
            </div>
            </div>

            <div class="form-outline mb-3">
                <textarea class="form-control" value="{{ $products->smol_dscrp}}" name="smol_dscrp" id="form6Example7" maxlength="140" rows="3">{{ $products->smol_dscrp}}</textarea>
                <label class="form-label" for="form6Example7">Quick Description</label>
            </div>
            <div class="form-outline mb-3">
                <textarea class="form-control" value="{{ $products->dscrp}}" name="dscrp" id="form6Example7" maxlength="140" rows="3">{{ $products->dscrp}}</textarea>
                <label class="form-label" for="form6Example7">Description</label>
            </div>

            <div class="form-outline mb-3">
              <input type="text" id="form6Example3" value="{{ $products->meta_title}}" name="meta_title" class="form-control" />
              <label class="form-label" for="form6Example3">Meta Title</label>
            </div>

            <div class="form-outline mb-3">
                <textarea class="form-control" value="{{ $products->meta_dscrp}}" name="meta_dscrp" maxlength="140" id="form6Example7" rows="3">{{ $products->meta_dscrp}}</textarea>
                <label class="form-label" for="form6Example7">Meta Description</label>
            </div>

            <div class="form-outline mb-2">
                <textarea class="form-control" value="{{ $products->meta_keywords}}" name="meta_keywords" maxlength="140" id="form6Example7" rows="3">{{ $products->meta_keywords}}</textarea>
                <label class="form-label" for="form6Example7">Meta Keywords</label>
            </div>
            @if($products->img)

            <img src="{{ asset('/uploads/products/'.$products->img)}}" class="rounded" style="width: 615px; height: 500px;" alt="Category-img">

            @endif
            <div class="form-outline mb-2">
                <h6>Product Image</h6>
                <input type="file" name="img" class="mb-1">
                <input type="hidden" >
            </div>

            <button type="submit" class="btn btn-primary btn-sm justfiy-content-center mb-4">Update</button>
          </form>
        </div>
        @else
        @endif

@endsection
