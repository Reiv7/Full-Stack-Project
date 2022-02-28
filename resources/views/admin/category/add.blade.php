@extends('layouts.admin')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-5 col-md-10 mx-auto">
        <div class="card mt-2 px-2">
          <div class="card-header p-3 mb-2">
            <h5 class="mb-0 text-center">Add Category</h5>
          </div>
          <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form6Example1" name="name"  class="form-control" />
                        <label class="form-label" for="form6Example1">Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" name="subcategories"  class="form-control" />
                            <label class="form-label" for="form6Example1">Subcategories</label>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="form-outline mb-3">
                <textarea class="form-control" name="dscrp" id="form6Example7" maxlength="140" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Description</label>
            </div>
            <div class="row mb-2">
            <div class="col">
                <div class="form-check mb-0">
                    <input class="form-check-input" name="status" type="checkbox" />
                    <label class="form-check-label">Status</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-0">
                    <input class="form-check-input" name="popular" type="checkbox" />
                    <label class="form-check-label">Popular</label>
                </div>
            </div>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" name="meta_title" class="form-control" />
              <label class="form-label" for="form6Example3">Meta Title</label>
            </div>
          
            <div class="form-outline mb-4">
                <textarea class="form-control" name="meta_dscrp" maxlength="140" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Meta Description</label>
            </div>
          
            <div class="form-outline mb-2">
                <textarea class="form-control" name="meta_keywords" maxlength="140" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Meta Keywords</label>
            </div>
          
            <div class="form-outline mb-2">
                <h6>Category Image</h6>
                <input type="file" name="img" class="mb-1">
                <input type="hidden" >
            </div>
          
            <button type="submit" class="btn btn-primary btn-sm justfiy-content-center mb-4">Place order</button>
          </form>
        </div>
    
@endsection