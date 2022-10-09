<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - My Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" border="0" /></a>
</div>
  
  </div>
  
  <div class="center_content">
  <div class="left_content">
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form_row">
        <label for="username" class="contact"><strong>{{ __('Username') }}</strong></label>
        <div class="col-md-6">
          <input id="username" type="username" class="contact_input @error('username') is-invalid @enderror" 
          name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

          @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form_row">
        <label for="password" class="contact"><strong>{{ __('Password') }}</strong></label>

        <div class="col-md-6">
          <input id="password" type="password" class="contact_input @error('password') is-invalid @enderror" 
          name="password" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form_row">
        <div class="terms">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
            </label>
          </div>
        </div>
      </div>

      <div class="form_row">
        <div class="col-md-8 offset-md-4">
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
          @endif
        </div>
      </div>

      <div class="form_row">
              <input id="login" type="submit" class="register" value="login">
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
      </div>
    </form>
    <div class="clear"></div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>

  </div>
</body>