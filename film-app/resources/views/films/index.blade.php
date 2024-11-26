<x-layout title="List the films">
    @auth
    <div id="decadeNavHolder">
        <a href="/films" class="decade-link">2000</a>
        <a href="/films" class="decade-link">2010</a>
    </div>

    <h1 id="filmsHeading">Films from the 2000s</h1>
    
    <div id="filmListHolder">
         
        @foreach ($films as $film)
        <p>
            <a href="/films/{{$film->id}}"> {{$film->title}} </a>
        </p>
        @endforeach 
     
    </div>
    @endauth
    @guest
        <p>
            You need to be logged in to view the content of this website. 
        </p>
    @endguest

    <!-- JS -->
    <script src="{{asset('js/app.js')}}"></script>


    </x-layout>