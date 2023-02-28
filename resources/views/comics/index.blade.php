@extends ('layouts.main')
@section ('title', 'Comics')

@section ('content')
<section id="comics">
  <section id="main-top">
            <div class="container">
            {{-- TITLE --}}
                <div class="series-title">
                    <h1> CURRENT SERIES </h1>
                </div>

                {{-- CONTAINER --}}
                <div class="series-container">
                @foreach ($comics as $comic)
                    
                    <div class="series-col">
                      <figure>
                        <img src="{{ $comic['thumb']}}" alt="">
                      </figure>
                      <p>{{ $comic['series']}}</p>
                    </div>
                @endforeach
                </div>
                {{-- BUTTON --}}
                <div class="load-more-button">
                <button>LOAD MORE</button>
                </div>

            </div>
        </section>
</section>
@endsection