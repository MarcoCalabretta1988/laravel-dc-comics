@extends ('layouts.main')
@section ('title', 'Comics')

@section ('content')
<section id="comics">
  <section id="main-top">
            <div class="container">
            {{-- TITLE --}}
                <div class="series-title rounded">
                    <h3> CURRENT SERIES </h3>
                </div>

                {{-- CONTAINER --}}
                <div class="series-container ">
                @foreach ($comics as $comic)
                    
                    <div class="series-col">
                      <a href="{{ route('comics.show', $comic->id)}}">
                        <figure>
                          <img src="{{ $comic['thumb']}}" alt="">
                        </figure>
                      </a>
                        <p>{{ $comic['series']}}</p>
                        <div id="editor-button">
                          <a href="{{ route('comics.edit',$comic->id)}}" class="btn btn-primary" >Edit</a>
                          <a href="" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                @endforeach
                </div>
                {{-- BUTTON --}}
                <div class="load-more-button">
                <a href="{{ route('comics.create')}}" class="button">Aggiungi nuovo</a>
                </div>

            </div>
        </section>
</section>
@endsection