@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="card " >
            <div class="card-header ">
                <div class="row mx-auto mb-0 mt-0 pb-0 justify-content-center">
                    <a class="btn btn-primary btn-sm col-md-3" href="{{url('adds-user')}}">Add User</a>
                    <span><h6 class="text-center" style="font-size: 25px; color:red;">All Users</h6></span>
                </div>
            </div>
            <div class="card-body px-1 pe-0 pb-0 pt-0 " >
            <div class="table-responsive" >
                    <table class="table-responsive h-100 mb-0" >
                    <thead>
                        <tr >
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-warning text-center">Avatar</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-warning text-start">Name</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 text-warning text-center">Control</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($users as $user)
                        <tr >
                            <td>
                                <div class="d-flex px-0">
                                <div class="d-flex flex-column justify-content-center  text-start">
                                    @if($user->avatar)
                                    <img src="{{ asset('/uploads/avatars/'.$user->avatar) }}" alt="profile_image" alt="profile_image" class="rounded mb-1" style=" width:120px; height:120px">
                                    @else
                                    <img src="{{asset('/uploads/avatars/default.jpg')}}" alt="profile_image" alt="profile_image" class="rounded mb-1" style=" width:120px; height:120px">

                                    @endif
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                <div class="d-flex flex-column justify-content-center text-start">
                                    {{ $user->name }}
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 ">
                                    @if (Auth::user()->role_as == '1')
                                <div class="d-flex justify-content-center text-start">
                                    <a class="btn btn-link text-dark rounded px-1 mb-0" href="{{ url('show-user/'.$user->id)}}"><i class="material-icons text-sm me-2">visibility</i>Show</a>
                                    <a class="btn btn-link text-dark rounded px-1 mb-0" href="{{ url('edit-user/'.$user->id)}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                    <a class="btn btn-link text-danger rounded px-1 mb-0" href="{{ url('delete-user/'.$user->id)}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                </div>
                                    @else
                                    <div class="d-flex justify-content-center text-start">
                                        <a class="btn btn-link text-dark rounded px-1 mb-0" href="{{ url('show-user/'.$user->id)}}"><i class="material-icons text-sm me-2">visibility</i>Show</a>
                                    </div>
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
