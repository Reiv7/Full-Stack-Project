@extends('layouts.admin')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-5 col-md-10 mx-auto">
        <div class="card mt-2 px-2">
            @if (Auth::user()->role_as == '1')
          <div class="card-header p-3 mb-2">
            <h5 class="mb-0 text-center">Edit - Update Category</h5>
          </div>
          <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form6Example1" value="{{ $category->name }}" name="name"  class="form-control" />
                        <label class="form-label"  for="form6Example1">Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Subcategories
                            <input class="dropdown" list="subcategories" value="{{ $category->subcategories }}" id="exampleDataList" name="subcategories" placeholder="Select or write here" ></label>
                            <datalist id="subcategories">
                            <option value="Women">
                            <option value="Men">
                            <option value="Kids">
                            <option value="Footwear">
                            <option value="Accessories">
                            </datalist>
                    </div>
                </div>
            </div>

            <div class="form-outline mb-3">
                <textarea class="form-control" name="dscrp" id="form6Example7" rows="4">{{ $category->dscrp }}</textarea>
                <label class="form-label" for="form6Example7">Description</label>
            </div>
            <div class="row mb-2">
            <div class="col">
                <div class="form-check mb-0">
                    <input class="form-check-input" {{ $category->status == "1" ? 'checked':'' }} name="status" type="checkbox" />
                    <label class="form-check-label">Status</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-0">
                    <input class="form-check-input" {{ $category->popular == "1" ? 'checked':'' }} name="popular" type="checkbox" />
                    <label class="form-check-label">Popular</label>
                </div>
            </div>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" value="{{ $category->meta_title }}" name="meta_title" class="form-control" />
              <label class="form-label" for="form6Example3">Meta Title</label>
            </div>

            <div class="form-outline mb-4">
                <textarea class="form-control"  name="meta_dscrp" id="form6Example7" rows="4">{{ $category->meta_dscrp }}</textarea>
                <label class="form-label" for="form6Example7">Meta Description</label>
            </div>

            <div class="form-outline mb-2">
                <textarea class="form-control"  name="meta_keywords" id="form6Example7" rows="4">{{ $category->meta_keywords }}</textarea>
                <label class="form-label" for="form6Example7">Meta Keywords</label>
            </div>
          @if($category->img)

          <img src="{{ asset('/uploads/category/'.$category->img)}}" class="rounded" style="width: 615px; height: 500px;" alt="Category-img">

          @endif
            <div class="form-outline mb-2">
                <h6>Category Image</h6>
                <input type="file" name="img" class="mb-1">
                <input type="hidden" >
            </div>

            <button type="submit" class="btn btn-primary btn-sm justfiy-content-center mb-4">Update</button>
          </form>
        </div>
        @else
        @endif

@endsection
