@extends ('layouts.main')
@section ('title', "$comic->series")

@section ('content')
<section id="comics-detail" class="container">
{{-- 
    <div class="thumb">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
     --}}
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

    <div class="row my-5">
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
        
  <a href="{{ route('comics.index')}}" class='button'>Torna indietro</a>

</section>
@endsection