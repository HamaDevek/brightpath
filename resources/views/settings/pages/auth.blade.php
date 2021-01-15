@extends('settings.layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Authentication Change</h1>
    @include('settings.layouts.message')
   
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Change Username</h5>
                <div class="card-body">
                <form method="POST" action="{{route('dashboard.auth.update')}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                          <label for="Username">Username</label>
                          <input type="text" class="form-control" name="username" id="Username" placeholder="John">
                        </div>
                        <div class="form-group">
                          <label for="Password">Password</label>
                          <input type="password" class="form-control" name="password" id="Password" placeholder="password">
                        </div>
                        <button class="btn btn-primary" type="submit">Change Username</button>
                      </form>
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Change Password</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('dashboard.auth.password')}}">
                        @csrf
                        <div class="form-group">
                          <label for="OldPassword">Old Password</label>
                          <input type="password" class="form-control" name="password" id="OldPassword" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                          <label for="NewPassword">New Password</label>
                          <input type="password" class="form-control" name="new" id="NewPassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <label for="ConfirmPassword">Confirm Password</label>
                          <input type="password" class="form-control" name="new_confirmation" id="ConfirmPassword" placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-primary" type="submit">Change Password</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection