
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>Join - DVD Emporium</title>
   <meta charset="utf-8">
   <link href="Join%20-%20DVD%20Emporium_files/emporium.css" rel="stylesheet" type="text/css">   
   <script type="text/javascript" src="Join%20-%20DVD%20Emporium_files/form_validation.js"></script>
</head>
<body>
   <div id="wrapper">
      <!-- Loads the standard nav header and sets
           the correct nav button as the current page -->
           @include('header')      <script type="text/javascript">
          document.getElementById("joinNav").className = "currentpage";  
      </script> 
      @include ('left-col')    </div>
      <div id="rightcol">
         <!--
The form HTML for the join page
-->
<h2>Sign-up now and start booking your movies on-line!</h2>  
  <div id="compnote">
     <p>* = Compulsory field</p>
  </div>   
  <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
  Privacy Notice: We take your privacy seriously and guarantee your data will not be shared with any third party.<br>
<!-- Register event handlers -->
<script type="text/javascript" src="Join%20-%20DVD%20Emporium_files/register_form_events.js"></script>      </div>
        <footer>    
    Copyright © 2015 - Bill Smart&nbsp;&nbsp;&nbsp;<span style="color:red">Note: This site requires JavaScript!</span><br>
    <a href="http://infotech.scu.edu.au/~bsmart10">Link to the InfoTech site</a><br>A big thanks to 
    the <a href="http://www.imdb.com/">Internet Movie Database (IMDb)</a> as that's were I 
    "borrowed" most images from. 
</footer>       </div>

</body></html>
