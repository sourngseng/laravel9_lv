@extends('layouts.auth-darkpan')

@section('content')
   <!-- Sign In Start -->
   <div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">
            <form method="post" action="{{ route('login.perform') }}">                        
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('assets/logo/logo.png')}}" alt="" style="width: 68px; height: 68px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-0">Angkor University</h4>                               
                            </div>
                            <span>Sign in for your work</span>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingInput">Email address</label>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" value="1">
                            
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    <p class="text-center mb-0">Don't have an Account? <a href="{{route('register.show')}}">Sign Up</a></p>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- Sign In End -->

@endsection