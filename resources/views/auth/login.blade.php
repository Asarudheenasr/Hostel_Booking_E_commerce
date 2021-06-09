
@extends('layouts.app')
@section('content')
<div id="login-page">
    <div class="container ">
      <form method="POST" class="form-login" action="{{ route('login') }}">
          @csrf
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
        <input placeholder="email" name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
          <br>
          <input placeholder="password" name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"><br>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('__Remember Me') }}
                                    </label>
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button><br>
          @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif 
          <hr>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="{{ route('register') }}">
              Create an account
              </a>
          </div>
        </div>
      </form>
    </div>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>

    $.backstretch("img/loginbg.png", {
      speed: 500
    });
    
  </script>

@endsection
