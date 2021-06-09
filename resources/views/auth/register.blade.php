@extends('layouts.app')
@section('content')

<div id="login-page">
    <div class="container">
    <form method="POST" class="form-login" enctype="multipart/form-data" action="{{ route('register') }}">
    @csrf
        <h2 class="form-login-heading">Sign UP now</h2>
        <div class="login-wrap">
           <!--name   -->
          <input id="name" type="text"  name="name" placeholder="User Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
          <br>
          <!-- age -->
          <input placeholder="age" id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age"  required  autofocus><br>
           <!-- mobile -->
         
          <input placeholder="mobile" id="mobile" type="tel" class="form-control @error('phone') is-invalid @enderror" name="mobile" required><br>
        <!-- occupation -->
        <input placeholder="occupation" id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation"  required autocomplete="name" autofocus>
          <!-- marital status -->
          <div>
                            <label for="marital_status" class="col-md-4 col-form-label text-md-right">{{ __('Marital_status ') }}</label>

                            <div>
                                
                            <label>
                                <input type="radio" name="status" value="single"> {{__('Single')}}
                            </label>
                            </div>
                            <div >
                            <label>
                                <input type="radio" name="status" value="married">{{__('Married')}}
                            </label>
                           
                        </div>
                                
                        </div>
        <!-- email -->   
        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <!-- password -->
         <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>
         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input placeholder="confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                       
        <!-- proimage -->
        <input id="proimage" type="file" name="proimage" class="form-control required">
            
        <label class="checkbox">
            <input type="checkbox" value="remember-me" class="ml-auto">{{__('__Remember me')}}
           
            </label>
        <!-- button submit -->
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i>  {{ __('Register') }}</button>
         
          <div class="registration">
           Already Have Account?<br/>
            <a class="" href="{{ route('login') }}">
              Login
              </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/loginbg.png", {
      speed:450
    });
  </script>
@endsection
