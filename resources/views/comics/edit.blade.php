@extends ('layouts.main')
@section ('title', 'Edit comics')

@section ('content')
<section id="comics-forum ">
  <div class="container my-5 border border-primary rounded bg-secondary text-white">
    <h2 class="text-center mt-5 fw-bold">EDIT COMIC</h2>

    <form action="{{ route ('comics.update',$comic->id)}}" method="POST">
        @method('PUT')
      @csrf
      <div class="row m-5">

         <div class="col-3">
           <div class="mb-3">
             <label for="title" class="form-label">Title:</label>
             <input type="text" class="form-control" id="title" name='title' placeholder="Title" value="{{ old('title',$comic->title)}}" required>
           </div>
         </div>

         <div class="col-3">
          <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" class="form-control" id="series" name='series' placeholder="Series" value="{{ old('series',$comic->series)}}"required>
          </div>
        </div>

        <div class="col-6">
          <div class="mb-3">
            <label for="thumb" class="form-label">Url:</label>
            <input type="url" class="form-control" id="thumb" name='thumb' required value="{{ old('thumb',$comic->thumb)}}" >
          </div>
        </div>

        <div class="col-12">
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" rows="3" name="description" >{{ old('description',$comic->description)}}</textarea>
          </div>
        </div>

        <div class="col-6">
          <div class="mb-3">
            <label for="artists" class="form-label">Artists:</label>
            <textarea class="form-control" id="artists" rows="3" name="artists" required>{{ old('artists',$comic->artists)}}</textarea>
          </div>
        </div>

        <div class="col-6">
          <div class="mb-3">
            <label for="writers" class="form-label">Writers:</label>
            <textarea class="form-control" id="writers" rows="3" name="writers" required>{{ old('writers',$comic->writers)}}</textarea>
          </div>
        </div>

        <div class="col-4">
          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name='price' placeholder="$0" required value="{{ old('price',$comic->price)}}">
          </div>
        </div>

        <div class="col-4">
          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="sale_date" name='sale_date' placeholder="2020-01-01" value="{{ old('sale_date',$comic->sale_date)}}" >
          </div>
        </div>

        <div class="col-4">
          <div class="mt-2 d-flex align-items-center h-100">
          <select class="form-select" name="type" required >
            <option @if(old('type', $comic->type) === '') selected @endif value="">Select type</option>
            <option @if(old('type', $comic->type) === 'comic book') selected @endif value="comic book">Comic Book</option>
            <option @if(old('type', $comic->type) === 'graphic novel') selected @endif value="graphic novel">Graphic Novel</option>
          </select>
        </div>

        
      </div>
      <div class="col-2 my-4">
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{route('comics.index')}}" class="btn btn-success">Back</a>
      </div>
        
      </div>
    </form>
  </div>
</section>
@endsection