@extends ('layouts.main')
@section ('title', 'Comics')

@section ('content')
<section id="comics">
  <section id="main-top">
            <div class="container py-5">
              @if(session('delete'))

              <div class="alert alert-success" role="alert">
                {{session('delete')}}
              </div>
              @endif
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
                          <form action="{{ route('comics.destroy', $comic->id)}}" method="POST" class="delete-forms" data-title ="{{ $comic->title}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
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

@section('scripts')

@vite('resources/js/destroy_confirm.js')

@endsection