<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" border="0" /></a></div>
  </div>

  <div class="center_content">
    <div class="left_content">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form_row">
          <label for="username" class="contact"><strong>{{ __('Username') }}</strong></label>
          <div class="col-md-6">
            <input id="username" type="text" class="contact_input @error('username') is-invalid @enderror" 
            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form_row">
          <label for="name" class="contact"><strong>{{ __('Name') }}</strong></label>
          <div class="col-md-6">
            <input id="name" type="text" class="contact_input @error('name') is-invalid @enderror" 
            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
        </div>

        <div class="form_row">
          <label for="email" class="contact"><strong>{{ __('Email Address') }}</strong></label>
          <div class="col-md-6">
            <input id="email" type="email" class="contact_input @error('email') is-invalid @enderror" 
            name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
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
            name="password" required autocomplete="new-password">

            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form_row">
          <label for="password-confirm" class="contact"><strong>{{ __('Confirm Password') }}</strong></label>
          <div class="col-md-6">
            <input id="password-confirm" type="password" class="contact_input" 
            name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>

        <div class="form_row">
          <div class="terms">
            <input type="checkbox" name="terms" />
              <a>I agree to the terms &amp; conditions</a> 
          </div>
        </div>

        <div class="form_row">
          <div class="col-md-6 offset-md-4">
            <input type="submit" class="register" value="register" />
              <a href="login" class="link-danger">Login</a>
          </div>
        </div>
      </form>
    </div>
  </div>
     
    <!--end of right content-->
    <div class="clear"></div>
</div>
</body>