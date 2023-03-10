@extends ('layouts.main')
@section ('title', "$comic->series")

@section ('content')

<section id="comics-detail" >
    <div class="thumb">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid"> 
    </div>
  <div class="container">


    <div class="row">
        <div class=" col col-content">
            {{-- TITOLE --}}
          <h2>{{$comic->title}}</h2>

          {{-- PRICE BOX --}}
          <div class='price-box mb-3'>
            <div class='price '>
                <p>U.S.Price: <strong class='comic-price'>{{ $comic->price}}</strong></p>
                <strong>AVAILABLE</strong>
            </div>
            <div class='availability'>Check Availability &#9660;</div>
        </div>
        {{-- DECRIPTION --}}

        <div class="description">
            <p>{{$comic->description}}</p>
        </div>

    
       </div>

        {{-- ADVERTISEMENT --}}
        <div class=" col-3 col-advertisement">
            <h4>ADVERTISEMENT</h4>
            <img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="Advertisement">
        </div>
    </div >

    <div class="row my-3">
        <div class="col-6">
            <h3>Talent</h3>
            <div class="col-talent">
                <div class="artists">

                    <p>Art by: </p>
                    <address>{{$comic->artists}}</address>
                </div>
                <div class="writers">
                    <p>Writer by: </p>   
                    <address>{{$comic->writers}}</address>
                
                </div>
            </div>
        </div>
        <div class="col-6">
            <h3>Specs</h3>
            <div class="col-specs">
                <div class="series"><strong>Series : </strong>{{$comic->series}}</div>
                <div class="series"><strong>U.S.Price: </strong> {{$comic->price}}</div>
                <div class="series"><strong>Series :  </strong>{{$comic->sale_date}}</div>
            </div>
        </div>
    </div>
        <div class="button-container d-flex justify-content-between">

            <a href="{{ route('comics.index')}}" class='button text-white'>Torna indietro</a>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('comics.edit',$comic->id)}}" class="btn btn-primary me-2" >Edit</a>
                <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
        </div>
 
</div>
</section>
@endsection