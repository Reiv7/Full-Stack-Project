@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-10 mx-auto">
            <div class="card mt-2 " >
                <div class="card-header pb-0  ">
                    <div class="row mb-0 mt-0 pb-0">
                        <span><h6 class="text-center" style="font-size: 25px; color:red;">Add User</h6></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url('add-user')}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="form-outline col-md-4 mb-4  ">
                                        <input type="text" name="name" id="form6Example4" class="form-control text-center"/>
                                        <label class="form-label" for="form6Example4">Name</label>
                                </div>
                                <div class="form-outline col-md-4 mb-4 ">
                                    <input type="password" id="form3Example4" class="form-control text-center @error('password') is-invalid @enderror" name="password"  name="password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>
                                <div class="form-outline col-md-4 mb-4 ">
                                    <input type="email" name="email" id="form6Example5" class="form-control text-center  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"   />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label class="form-label" for="form6Example5">Email</label>
                                </div>
                                <div class="form-outline col-md-4 mb-4">
                                    <input type="text" name="address" id="form6Example4" class="form-control text-center" />
                                    <label class="form-label" for="form6Example4">Address</label>
                                </div>
                                <div class="form-outline col-md-4 mb-4 ">
                                    <input type="tel" name="phone" id="typePhone" class="form-control text-center @error('phone') is-invalid @enderror" name="phone"   data-mdb-showcounter="true" maxlength="11" />
                                        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label " for="typePhone">Phone Number</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mb-4 col-md-4 mx-1 ">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
