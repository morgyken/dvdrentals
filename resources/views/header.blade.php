<link href="{{URL::asset('res/res1/emporium.css')}}" rel="stylesheet" type="text/css">  

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
</header> 