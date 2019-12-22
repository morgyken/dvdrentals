<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <title>MovieZone - DVD Emporium</title>
   <meta charset="utf-8">
   <link href="{{URL::asset('res/res1/emporiumMZ.css')}}" rel="stylesheet" type="text/css">  
      
</head>
<body>
   <div id="wrapper">
      
      <!-- Loads the standard nav header and sets
      the correct nav button as the current page -->
     
<header>

<img src="{{URL::asset('res/res1/img/dvd.jpg')}}" alt="Image of DVD" width="100" height="100">
<h1>DVD Emporium</h1>     
<nav>
<ul>
   <li><a id="indexNav" href=" {{ URL::to('/home')}}">Home</a></li>
   <li><a id="contactNav" href="{{ URL::to('/contact') }}" class="currentpage">Contact</a></li>
   <li><a id="techZoneNav" href=" {{ URL::to('/techzone') }}">TechZone</a></li>
   <li><a id="movieZoneNav" href="{{ URL::to('/moviezone')}}">MovieZone</a></li>
   <li><a id="joinNav" href="{{ URL::to('/join') }}">Join</a></li>
</ul>
</nav>  
</header>    <script type="text/javascript">
         document.getElementById("movieZoneNav").className = "currentpage";  
      </script> 

      <div id="leftcol">
            <h2>Search Menu</h2>
           <div class="moviezone_nav">
              <ul>
                 <li><a href="{{URL::to('/moviezone')}}">Show All Movies</a></li>
                 <li><a href="{{URL::to('/moviezone')}}">New Releases</a></li>
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=actor">Search by Actor</a></li>
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=director">Search by Director</a></li>
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=genre">Search by Genre</a></li>
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=classification">Search by Classification</a></li>
              </ul>
              <h2>User Menu</h2>
              <ul><li><a href="http://infotech.scu.edu.au/emporium/booking.php">Log In</a></li>  <li><a href="http://infotech.scu.edu.au/emporium/php_includes/logoutUser.php">Logout</a></li>
            </ul>
            <br>
            <ul>
               <li><a href="http://infotech.scu.edu.au/emporium/admin.php">Admin</a></li>
            </ul>
         </div>      </div>
         
      <div id="rightcol">
          
         <h1>New Releases</h1>

         @foreach ($data as $data)
   <fieldset>
            <legend>{{ $data->title }}</legend>
            <img class="moviePoster" src="{{URL::asset('res/res1/img/img1.jpg')}}" 
            alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>{{ $data->genre }}<br>
            <span class="movieHeading">Year: </span> {{ $data->year}}   <br>
            <span class="movieHeading">Director: </span> {{$data->director }}  <br>
            <span class="movieHeading">Classification: </span> {{ $data->classification }}<br>
            <span class="movieBold">Starring: </span>{{ $data->actor }}.<br> 
            <span class="movieHeading">Studio: </span>{{ $data->studio }}<br>
            <span class="movieHeading">Tagline: </span>{{ $data->tagline }}. <br>
            <p > {{ $data->description }}.</p>
            <span class="movieHeading">Rental: </span>DVD - ${{ $data->rental }}&nbsp;
            BluRay - ${{ $data->rental }}<br>
            <span class="movieHeading">Purchase: </span>DVD - ${{ $data->purchase }} 
            &nbsp;BluRay - $35.95<br>  
            <span class="movieHeading">Availability: </span> DVD - {{ $data->available }} &nbsp;
            BluRay - {{ $data->available }}
   </fieldset>
   @endforeach


      </div>
      <footer>    
    Copyright © 2015 - Bill Smart&nbsp;&nbsp;&nbsp;<span style="color:red">Note: This site requires JavaScript!</span><br>
    <a href="http://infotech.scu.edu.au/~bsmart10">Link to the InfoTech site</a><br>A big thanks to 
    the <a href="http://www.imdb.com/">Internet Movie Database (IMDb)</a> as that's were I 
    "borrowed" most images from. 
</footer>       </div>

</body></html>