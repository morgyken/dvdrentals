@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



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
  <form method="post" id="joinform" name="joinform" action="join.php">
     <fieldset id="formnameandemail">
        <legend>Name</legend>
        <div> <!-- simply holds names apart -->
           <label>Surname:</label>
           <input type="text" name="surname" id="surname" size="50" maxlength="50" required="">
           <span class="requiredmarker">*</span>
        </div>
        <label>Other names:</label>
        <input type="text" name="othername" id="othername" size="50" maxlength="60" required="">
        <span class="requiredmarker">*</span>
     </fieldset>
     
     <fieldset id="preferredcontact">
        <legend>Preferred Contact Method:</legend>
        Mobile phone:
        <input type="radio" name="contactmethod" id="contactMobile" value="mobile">
        &nbsp;&nbsp;Landline phone:
        <input type="radio" name="contactmethod" id="contactPhone" value="landline">
        &nbsp;&nbsp;Email:
        <input type="radio" name="contactmethod" id="contactEmail" value="email" checked="checked">
        <div class="popup" id="contacthelp">
           <p>Please select your preferred contact method.</p>
        </div>
     </fieldset>
     
     <fieldset id="formcontact">
        <legend>Contact details</legend>
        <div id="mobilerow">
           <label>Mobile:</label>
           <input type="text" name="mobilenum" id="mobilenum" size="13" maxlength="12">
           <span class="requiredmarker" id="mobilemarker" style="visibility: hidden;">*</span>
           <div class="popup" id="mobilehelp">
              Enter mobile number in following format:<br>
              0[4 or 5]XX XXX XXX where X is a digit
           </div>                           
        </div>
        <div id="phonerow">
           <label>Landline:</label>
           <input type="text" name="phonenum" id="phonenum" size="13" maxlength="13">
           <span class="requiredmarker" id="phonemarker" style="visibility: hidden;">*</span>  
           <div class="popup" id="phonehelp">
              Enter phone number in following format:<br>
              (0[2,3,6,7,8 or 9]) XXXXXXXX where X is a digit
           </div>                               
        </div>
        <div id="emailrow">
           <label>Email:</label>
           <input type="email" name="email" id="email" size="50" maxlength="50">
           <span class="requiredmarker" id="emailmarker">*</span>                             
           <div class="popup" id="emailhelp">
              Please enter valid email address
           </div>                               
        </div>
     </fieldset>
     <script type="text/javascript">
   <!--
    //turn off visibility of mobile and Landline (as email checked)
    mobilemarker.style.visibility = "hidden";
    phonemarker.style.visibility = "hidden";
   -->
</script>
     <fieldset id="occupationlist">
        <legend>Choose Your Occupation</legend>
        <label>Occupation:</label>
        <select name="occupation" id="occupation">
           <option value="blank" selected="selected"></option>                        
           <option value="Student">Student</option>
           <option value="Manager">Manager</option>
           <option value="Healthcare">Medical worker</option>
           <option value="Trades">Trades worker</option>
           <option value="Educator">Education</option>
           <option value="Technician">Technician</option>
           <option value="Clerical">Clerical worker</option>
           <option value="Retail">Retail worker</option>
           <option value="Researcher">Researcher</option>
           <option value="Other">Other</option>
        </select>
        <span class="requiredmarker">*</span>                        
     </fieldset>
 
     <fieldset id="formaddress">
        <legend>Address:</legend>
        <div id="checkboxrow">
           <input type="checkbox" name="magazine" id="magazine" value="yes" checked="checked">
           Do you want to receive our monthly magazine?<br><br>
        </div>   
        <div id="streetrow">
            <label>Street address:</label>
            <input type="text" name="streetaddr" id="streetaddr" size="50" maxlength="50">
            <span class="requiredmarker" id="streetmarker">*</span>                              
            <div class="popup" id="streethelp">
                Please enter house number and street address
            </div>                                  
        </div>
        <div id="suburbrow">
            <label>Suburb and State:</label>
            <input type="text" name="suburbstate" id="suburbstate" size="50" maxlength="50">
            <span class="requiredmarker" id="suburbmarker">*</span>
            <div class="popup" id="suburbhelp">
                Please enter suburb and state separated by comma:<br>
                Suburb, State
            </div>                                  
        </div>                     
        <div id="postcoderow">
            <label>Postcode:</label>
            <input type="text" name="postcode" id="postcode" size="4" maxlength="4">
            <span class="requiredmarker" id="postcodemarker">*</span>                              
            <div class="popup" id="postcodehelp">
                Please enter postcode maximum 4 digits
            </div>                                  
         </div>                                             
     </fieldset>        

     <fieldset id="username"><legend>Username and Password:</legend>
        <div id="usernamerow">
           <label>Username:</label>
           <input type="text" name="joinusername" id="joinusername" size="14" maxlength="10">
           <span class="requiredmarker">*</span>                           
           <div class="popup" id="usernamehelp">
              Please enter username<br>minimum 6 characters - maximum 10 characters
           </div>                               
        </div>
        <div id="passwordrow">
           <label>Password:</label>
           <input type="password" name="userpass" id="userpass" size="15" maxlength="10">
           <span class="requiredmarker">*</span>                           
           <div class="popup" id="passwordhelp">
              10 characters maximum containing at minimum<br>one uppercase letter,<br>
              one lowercase letter,<br>one number and<br>one special character<br> 
              with no whitespace allowed
           </div>                               
        </div>                     
        <div id="verifypassrow">
           <label>Verify password:</label>
           <input type="password" name="verifypass" id="verifypass" size="15" maxlength="40">
           <span class="requiredmarker">*</span>                           
           <div class="popup" id="verifypasshelp">
              <p>Enter password again for verification</p>
           </div>                               
        </div>                     
     </fieldset>                                                          
            
     <div id="formbuttons">
        <input type="submit" name="submit" id="submit" value="Join the DVD Emporium Now">&nbsp;&nbsp;
        <input type="reset">
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
@endsection
