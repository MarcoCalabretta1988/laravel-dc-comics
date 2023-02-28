@php
$links = config('menu');
@endphp

<header>
        <nav class="container">

            <figure>
                <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="Dc logo"></a>
            </figure>
            <ul>
                @foreach ($links as $link )    
                <li  class="{{ request()->routeIs($link['route_name']) ? 'current' : ''}}"> <a href="{{ route($link['route_name']) }}">{{$link['title']}}</a></li>
                @endforeach
              
            </ul>
        </nav>

         <section id="jumbotron"></section>

    </header>