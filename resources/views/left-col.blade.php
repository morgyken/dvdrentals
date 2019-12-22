<div id="leftcol">
         <h2> New Releases</h2>

         @foreach($data as $data)
         <fieldset>
       <legend>{{ $data->title }}</legend>
       <img class="moviePoster" src="{{URL::asset('res/res1/img/1436457000FF7.jpg')}}" alt="Movie poster" width="105" height="150">
       <span class="movieHeading">Genre: </span>{{ $data->genre }}<br>
       <span class="movieHeading">Director: </span>{{ $data->director }}<br>
       <span class="movieHeading">Classification: </span>{{ $data->classification }}<br>
       <span class="movieBold">Starring: </span> {{ $data->actor }}
       <p><span class="movieBold">{{ $data->tagline }}</span></p>
       <p>{{ $data->description }}</p>
       </fieldset><br>
       @endforeach
       <br>

    
    </div>