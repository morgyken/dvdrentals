<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>Welcome - DVD Emporium</title>
   <meta charset="utf-8">
 
   <link href="Welcome%20-%20DVD%20Emporium_files/emporium.css" rel="stylesheet" type="text/css">      
</head>
<body>
   <div id="wrapper">    
      <!-- following loads the navigation and sets the correct button as the current page -->
      @include('header')

       
      <script type="text/javascript">
         document.getElementById("indexNav").className = "currentpage";  
      </script>
      
      @include ('left-col');
      
      <div id="rightcol">
                  <h1>Welcome to the Emporium</h1>
         <div class="articleBody">
            <p><span class="shopTitle">DVD Emporium</span> is known for its high quality and customer service. We are 
            dedicated to procuring he finest movies for our customers. 
            DVD was the premier digital video storage medium of the 20th 
            century, and now you too can enjoy the crisp visuals and clean audio of DVD as well as 
            the improved quality of the 21st century's storage medium of choice BluRay.</p>
            <p>Our shop, conveniently located near Southern Cross University at the Gold Coast 
            contains literally thousands of new and quality pre-loved DVDs and BluRays available 
            for your viewing pleasure. Rent or purchase its up to you. Consider becoming a member as
            this will allow you to book on-line and save you the disappointment of arriving only to 
            find the movie you were wishing to view or purchase is currently out of stock.</p>
            <p>To become a member please <a href="{{URL::to('/join') }}">join up</a>.</p>
            <p>You can view our extensive movie database in the <a href="{{URL::to('/moviezone') }}">MovieZone
            </a>.</p>
            <p>As an additional service to our clientele our resident IT guru provides weekly advice
            on important developments in the IT industry. View the advice from our store IT expert
            in the<a href="{{URL::to('/techzone') }}">TechZone</a>.</p>
         </div>
      </div>
      <footer>    
    Copyright © 2015 - Bill Smart&nbsp;&nbsp;&nbsp;<span style="color:red">Note: This site requires JavaScript!</span><br>
    <a href="http://infotech.scu.edu.au/~bsmart10">Link to the InfoTech site</a><br>A big thanks to 
    the <a href="http://www.imdb.com/">Internet Movie Database (IMDb)</a> as that's were I 
    "borrowed" most images from. 
</footer>       </div>  

</body></html>