@extends('layouts.auth-darkpan')

@section('content')

 <!-- Sign Up Start -->
 <div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-8 col-lg-5 col-xl-6">
            <form method="post" action="{{ route('register.perform') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">

                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('assets/logo/logo.png')}}" alt="" style="width: 68px; height: 68px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-0">Angkor University</h4>                               
                            </div>
                            <span>Register your account!</span>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" name="name" value="{{ old('name') }}" placeholder="Seng Sourng" required="required" autofocus>
                        <label for="floatingText">Full Name</label>
                        @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" name="username" value="{{ old('username') }}" placeholder="sengsourng" required="required" autofocus>
                        <label for="floatingText">Username</label>
                        @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" name="phone" value="{{ old('phone') }}" placeholder="092771244" required="required" autofocus>
                        <label for="floatingText">Phone</label>
                        @if ($errors->has('phone'))
                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                    @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" placeholder="sengsourng@gmail.com" required="required" autofocus>
                        <label for="floatingInput">Email address</label>
                        @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1">
                            <label class="form-check-label" for="exampleCheck1">Accept Policy</label>
                        </div>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    <p class="text-center mb-0">Already have an Account? <a href="{{route('login.show')}}">Sign In</a></p>
                   
                </div>
            </form>
        </div>
    </div>
    
</div>
<!-- Sign Up End -->
@endsection