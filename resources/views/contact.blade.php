<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>Contact - DVD Emporium</title>
   <meta charset="utf-8">
   <link href=" {{ URL::asset('res/res1/emporium.css') }}" rel="stylesheet" type="text/css">   
 </head>
<body>
   <div id="wrapper">
   
      <!-- following loads the navigation and sets the correct button as the current page -->
    
      @include('header')
    
    <script type="text/javascript">
         document.getElementById("contactNav").className = "currentpage";  
      </script> 
      
      @include ('left-col');

      <div id="rightcol">
                  <h2>Contact Info for DVD Emporium</h2> 
         <img class="center" src="{{ URL::asset('res/res1/img/dvd_emporium.jpg') }}" alt="Our extensive collection" title="Our extensive collection" width="410" height="135">
         <p class="contactCentered">Come on down and view our collection</p>
         <div id="contactBlock">
            <label>Phone:</label> (07) 1234-5678<br>
            <label>Address:</label> Southern Cross Drive<br>
            <label>&nbsp;</label>Bilinga, Queensland 4225<br>
            <label>Email:</label><a href="mailto:info@DVD-Emporium.com.au?subject=Direct from DVD Emporium website">
               info@DVD-Emporium.com.au</a><br>
         </div>
         <h2>DVD Emporium location (Google Map)</h2><h2>    
         <iframe src="Contact%20-%20DVD%20Emporium_files/embed.html" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe>      
      </h2></div>
         <footer>    
    Copyright © 2015 - Bill Smart&nbsp;&nbsp;&nbsp;<span style="color:red">Note: This site requires JavaScript!</span><br>
    <a href="http://infotech.scu.edu.au/~bsmart10">Link to the InfoTech site</a><br>A big thanks to 
    the <a href="http://www.imdb.com/">Internet Movie Database (IMDb)</a> as that's were I 
    "borrowed" most images from. 
</footer>        
   </div>     

</body></html>