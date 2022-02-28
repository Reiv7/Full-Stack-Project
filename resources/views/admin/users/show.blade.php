@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card " >
                    <div class="card-header pb-0 ">
                        <div class="row mx-auto mb-0 mt-0 pb-0">
                            <span><h6 class="text-center" style="font-size: 25px; color:red;">{{$users->name}}'s Details</h6></span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Avatar</label>
                                    <div class="border justify-items-center text-center p-2 ">
                                        @if($users->avatar)
                                        <img src="{{ asset('/uploads/avatars/'.$users->avatar) }}" alt="profile_image" alt="profile_image" class="rounded mb-1 img-fluid" style=" width:150px; height:150px;">
                                        @else
                                        <img src="{{asset('/uploads/avatars/default.jpg')}}" alt="profile_image" alt="profile_image" class="rounded mb-1 img-fluid" style=" width:150px; height:150px;">

                                        @endif</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Name</label>
                                    <div class="p-2 border">{{ $users->name}}</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Role</label>
                                    <div class="p-2 border">{{ $users->role_as == '0' ? 'User' : 'Admin'}}</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <div class="p-2 border">{{ $users->email}}</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Phone</label>
                                    <div class="p-2 border">{{ $users->phone}}</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Address</label>
                                    <div class="p-2 border">{{ $users->address}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
