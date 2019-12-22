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
      <div id="leftcol">
         <h2> New Releases</h2>
         <fieldset>
       <legend>The Equalizer</legend>
       <img class="moviePoster" src="Join%20-%20DVD%20Emporium_files/1436255761Equalizer.jpg" alt="Movie poster" width="105" height="150">
       <span class="movieHeading">Genre: </span>Thriller<br>
       <span class="movieHeading">Director: </span>Antoine Fuqua<br>
       <span class="movieHeading">Classification: </span>MA<br>
       <span class="movieBold">Starring: </span>Denzel Washington, Marton Csokas, Chloe Grace Moretz and Bill Pullman.
       <p><span class="movieBold">What do you see when you look at me? </span></p>
       <p>A man believes he has put his mysterious past behind him and 
has dedicated himself to beginning a new, quiet life. But when he meets a
 young girl under the control of ultra-violent Russian gangsters, he 
can't stand idly by - he has to help her.</p>
       </fieldset><br><br><fieldset>
       <legend>Furious Seven</legend>
       <img class="moviePoster" src="Join%20-%20DVD%20Emporium_files/1436457000FF7.jpg" alt="Movie poster" width="105" height="150">
       <span class="movieHeading">Genre: </span>Thriller<br>
       <span class="movieHeading">Director: </span>Justin Lin<br>
       <span class="movieHeading">Classification: </span>PG<br>
       <span class="movieBold">Starring: </span>Vin Diesel, Paul Walker, Jason Statham, Kurt Russell, Michelle Rodriguez and Dwayne Johnson.
       <p><span class="movieBold">One last ride.</span></p>
       <p>Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.</p>
       </fieldset>      </div>
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