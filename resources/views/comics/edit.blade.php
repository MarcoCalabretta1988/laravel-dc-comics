@extends ('layouts.main')
@section ('title', 'Edit comics')

@section ('content')
<section id="comics-forum ">
  <div class="container my-5 border border-primary rounded bg-secondary text-white">
    <h2 class="text-center mt-5 fw-bold">EDIT COMIC</h2>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
       <ul>
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
            
        @endforeach
       </ul>
      </div>
      @endif
      @include('includes.comics.form')
  </div>
</section>
@endsection