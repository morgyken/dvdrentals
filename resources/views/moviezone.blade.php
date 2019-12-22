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
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=show_all">Show All Movies</a></li>
                 <li><a href="http://infotech.scu.edu.au/emporium/moviezone.php?search=new_release">New Releases</a></li>
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
          
         <h1>New Releases</h1><fieldset>
            <legend>Captain America: The Winter Soldier</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1250744227winter.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Adventure<br>
            <span class="movieHeading">Year: </span>2014<br>
            <span class="movieHeading">Director: </span>Anthony Russo<br>
            <span class="movieHeading">Classification: </span>M<br>
            <span class="movieBold">Starring: </span>Chris Evans, Samuel L. Jackson, Scarlett Johansson, Robert Redford, Sebastian Stan and Anthony Mackie.<br> 
            <span class="movieHeading">Studio: </span>Marvel Studios<br>
            <span class="movieHeading">Tagline: </span>In heroes we trust. <br>
            <p>As Steve Rogers struggles to embrace his role in the 
modern world, he teams up with another super soldier, the black widow, 
to battle a new threat from old history: an assassin known as the Winter
 Soldier.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $24.95 
            &nbsp;BluRay - $35.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 0 &nbsp;
            BluRay - 0</fieldset>
<fieldset>
            <legend>Edge of Tomorrow</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/125075252edgeoftomorrow.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Action<br>
            <span class="movieHeading">Year: </span>2014<br>
            <span class="movieHeading">Director: </span>Doug Liman<br>
            <span class="movieHeading">Classification: </span>M<br>
            <span class="movieBold">Starring: </span>Tom Cruise, Emily Blunt, Brendan Gleeson, Jonas Armstrong and Tony Way.<br> 
            <span class="movieHeading">Studio: </span>Warner Bros. Pictures<br>
            <span class="movieHeading">Tagline: </span>Live, Die, Repeat <br>
            <p>A military officer is brought into an alien war against 
an extraterrestrial enemy who can reset the day and know the future. 
When this officer is enabled with the same power, he teams up with a 
Special Forces warrior to try and end the war.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $7.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $20.00 
            &nbsp;BluRay - $26.00<br>  
            <span class="movieHeading">Availability: </span> DVD - 11 &nbsp;
            BluRay - 11</fieldset>
<fieldset>
            <legend>Furious Seven</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1436457000FF7.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Thriller<br>
            <span class="movieHeading">Year: </span>2015<br>
            <span class="movieHeading">Director: </span>Justin Lin<br>
            <span class="movieHeading">Classification: </span>PG<br>
            <span class="movieBold">Starring: </span>Vin Diesel, Paul Walker, Jason Statham, Kurt Russell, Michelle Rodriguez and Dwayne Johnson.<br> 
            <span class="movieHeading">Studio: </span>Universal Pictures<br>
            <span class="movieHeading">Tagline: </span>One last ride.<br>
            <p>Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $22.95 
            &nbsp;BluRay - $29.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 10 &nbsp;
            BluRay - 6</fieldset>
<fieldset>
            <legend>Guardians of the Galaxy</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1420787270guardians.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Sci-fi<br>
            <span class="movieHeading">Year: </span>2014<br>
            <span class="movieHeading">Director: </span>James Gunn<br>
            <span class="movieHeading">Classification: </span>M<br>
            <span class="movieBold">Starring: </span>Chris Pratt, Zoe Saldana, Dave Bautista, Vin Diesel, Bradley Cooper and Lee Pace.<br> 
            <span class="movieHeading">Studio: </span>Marvel Studios<br>
            <span class="movieHeading">Tagline: </span>All heroes start somewhere. <br>
            <p>A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $7.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $20.00 
            &nbsp;BluRay - $28.00<br>  
            <span class="movieHeading">Availability: </span> DVD - 11 &nbsp;
            BluRay - 22</fieldset>
<fieldset>
            <legend>Jupiter Ascending</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1436253928jupiter.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Sci-fi<br>
            <span class="movieHeading">Year: </span>2015<br>
            <span class="movieHeading">Director: </span>The Wachowskis<br>
            <span class="movieHeading">Classification: </span>M<br>
            <span class="movieBold">Starring: </span>Channing Tatum, Mila Kunis and Sean Bean.<br> 
            <span class="movieHeading">Studio: </span>Warner Bros. Pictures<br>
            <span class="movieHeading">Tagline: </span>Expand your universe.<br>
            <p>A young woman discovers her destiny as an heiress of 
intergalactic nobility and must fight to protect the inhabitants of 
Earth from an ancient and destructive industry.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $32.95 
            &nbsp;BluRay - $39.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 11 &nbsp;
            BluRay - 0</fieldset>
<fieldset>
            <legend>Ready Player One</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1553065457playerone.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Sci-fi<br>
            <span class="movieHeading">Year: </span>2018<br>
            <span class="movieHeading">Director: </span>Steven Spielberg<br>
            <span class="movieHeading">Classification: </span>PG<br>
            <span class="movieBold">Starring: </span>Tye Sheridan, Olivia Cooke, Ben Mendelson, Lena Waithe, Philip Zhao and Win Morisaki.<br> 
            <span class="movieHeading">Studio: </span>Warner Bros. Pictures<br>
            <span class="movieHeading">Tagline: </span>Accept your reality... or fight for a better one.<br>
            <p>When the creator of a virtual reality world called the 
OASIS dies, he releases a video in which he challenges all OASIS users 
to find his Easter Egg, which will give the finder his fortune.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.99<br>
            <span class="movieHeading">Purchase: </span>DVD - $27.00 
            &nbsp;BluRay - $37.00<br>  
            <span class="movieHeading">Availability: </span> DVD - 5 &nbsp;
            BluRay - 4</fieldset>
<fieldset>
            <legend>The Avengers</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1436181707avengers.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Adventure<br>
            <span class="movieHeading">Year: </span>2012<br>
            <span class="movieHeading">Director: </span>Joss Whedon<br>
            <span class="movieHeading">Classification: </span>MA<br>
            <span class="movieBold">Starring: </span>Samuel L. Jackson, Robert Downey Jr., Chris Evans, Scarlett Johansson, Chris Hemsworth and Mark Ruffalo.<br> 
            <span class="movieHeading">Studio: </span>Marvel Studios<br>
            <span class="movieHeading">Tagline: </span>Earth's mightiest heroes must come together<br>
            <p>Nick Fury is director of S.H.I.E.L.D. The agency is a 
who's who of Marvel Super Heroes, with Iron Man, The Incredible Hulk, 
Thor, Captain America, Hawkeye and Black Widow. When global security is 
threatened by Loki, Nick Fury and the team save the world.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $29.95 
            &nbsp;BluRay - $39.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 13 &nbsp;
            BluRay - 8</fieldset>
<fieldset>
            <legend>The Equalizer</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1436255761Equalizer.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Thriller<br>
            <span class="movieHeading">Year: </span>2014<br>
            <span class="movieHeading">Director: </span>Antoine Fuqua<br>
            <span class="movieHeading">Classification: </span>MA<br>
            <span class="movieBold">Starring: </span>Denzel Washington, Marton Csokas, Chloe Grace Moretz and Bill Pullman.<br> 
            <span class="movieHeading">Studio: </span>Columbia Pictures Corporation<br>
            <span class="movieHeading">Tagline: </span>What do you see when you look at me? <br>
            <p>A man believes he has put his mysterious past behind him 
and has dedicated himself to beginning a new, quiet life. But when he 
meets a young girl under the control of ultra-violent Russian gangsters,
 he can't stand idly by - he has to help her.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $20.95 
            &nbsp;BluRay - $25.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 8 &nbsp;
            BluRay - 0</fieldset>
<fieldset>
            <legend>The Hunger Games: Mockingjay - Part 1</legend>
            <img class="moviePoster" src="MovieZone%20-%20DVD%20Emporium_files/1436253326mockingjay1.jpg" alt="Movie poster" width="105" height="150"><span class="movieBold">Overnight Rental</span><br>
            <span class="movieHeading">Genre: </span>Sci-fi<br>
            <span class="movieHeading">Year: </span>2014<br>
            <span class="movieHeading">Director: </span>Francis Lawrence<br>
            <span class="movieHeading">Classification: </span>M<br>
            <span class="movieBold">Starring: </span>Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth, Donald Sutherland, Philip Seymour Hoffman and Julianne Moore.<br> 
            <span class="movieHeading">Studio: </span>Color Force<br>
            <span class="movieHeading">Tagline: </span>Fire burns brighter in the darkness<br>
            <p>Katniss Everdeen is in District 13 after she shatters the
 games forever. Under the leadership of President Coin and the advice of
 her trusted friends, Katniss spreads her wings as she fights to save 
Peeta and a nation moved by her courage.</p>
            <span class="movieHeading">Rental: </span>DVD - $5.00&nbsp;
            BluRay - $6.00<br>
            <span class="movieHeading">Purchase: </span>DVD - $24.95 
            &nbsp;BluRay - $32.95<br>  
            <span class="movieHeading">Availability: </span> DVD - 10 &nbsp;
            BluRay - 0</fieldset>
      </div>
      <footer>    
    Copyright © 2015 - Bill Smart&nbsp;&nbsp;&nbsp;<span style="color:red">Note: This site requires JavaScript!</span><br>
    <a href="http://infotech.scu.edu.au/~bsmart10">Link to the InfoTech site</a><br>A big thanks to 
    the <a href="http://www.imdb.com/">Internet Movie Database (IMDb)</a> as that's were I 
    "borrowed" most images from. 
</footer>       </div>

</body></html>