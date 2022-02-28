@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-10 col-md-10 mx-auto ">
      <div class="card" >
            <div class="card-header pb-0 ">
                <div class="row mx-auto mb-0 mt-0 pb-0">
                    <span><h6 class="text-center" style="font-size: 25px; color:orangered;">Categories</h6></span>
                </div>
            </div>
            <div class="card-body px-1 pe-0 pb-0 pt-0" >
            <div class="table-responsive" >
                    <table class="table-responsive mb-0" >
                    <thead>
                        <tr >
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-start ps-3">Name</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-center">Subcategories</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-center">Description</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-center">Image</th>
                        @if (Auth::user()->role_as == '1')
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-center">Control</th>
                        @else
                        @endif
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($category as $item)
                        <tr >
                            <td>
                                <div class="d-flex px-2">
                                <div class="d-flex justify-content-center text-start">
                                    {{ $item->name }}
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                <div class="d-flex justify-content-center  text-start">
                                    {{ $item->subcategories }}
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                <div class="d-flex justify-content-center text-start">
                                    {{ $item->dscrp }}
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2  ">
                                <div class="d-flex justify-content-center mb-2  text-start">
                                    <img src="{{asset('/uploads/category/'.$item->img) }}" class="rounded" style=" width:100px; height:100px" alt="item-image">
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 ">
                                    @if (Auth::user()->role_as == '1')
                                <div class="d-flex mb-2 justify-content-center text-start">
                                    <a class="btn btn-link text-dark rounded px-1 mb-0" href="{{ url('show-cate/'.$item->id)}}"><i class="material-icons text-sm me-2">visibility</i>Show</a>
                                    <a class="btn btn-link text-dark rounded px-1 mb-0" href="{{ url('edit-cate/'.$item->id)}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                    <a class="btn btn-link text-danger rounded px-1 mb-0" href="{{ url('delete-cate/'.$item->id)}}" onclick="return confirm('Are you sure to delete this item?')"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                </div>
                                    @else

                                    @endif
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
