@extends('layout')

@section('title', 'Add Track')

@section('main')
  <div class="row">
    <div class="col">
      <form  action="/tracks" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
          <small class="text-danger">{{$errors->first('name')}}</small>
        </div>
        <div class="form-group">
          <label for="album">Album</label>
          <select class="form-control"  name="album">
            @foreach($albums as $album)
              <option value="{{$album->AlbumId}}" {{$album->AlbumId == old("album") ? "selected":""}}>
                {{$album->Title}}
              </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="media">Media Type</label>
          <select class="form-control"  name="media">
            @foreach($mediaType as $media)
              <option value="{{$media->MediaTypeId}}" {{$media->MediaTypeId == old("media") ? "selected":""}}>
                {{$media->Name}}
              </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="genre">Genres</label>
          <select class="form-control"  name="genre">
            @foreach($genres as $genre)
              <option value="{{$genre->GenreId}}" {{$genre->GenreId == old("genre") ? "selected":""}}>
                {{$genre->Name}}
              </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="composer">Composer</label>
          <input type="text" id="composer" name="composer" class="form-control" value="{{old('composer')}}">
          <small class="text-danger">{{$errors->first('composer')}}</small>
        </div>
        <div class="form-group">
          <label for="millisecond">Millisecond</label>
          <input type="number" id="millisecond" name="millisecond" class="form-control" value="{{old('millisecond')}}">
          <small class="text-danger">{{$errors->first('millisecond')}}</small>
        </div>
        <div class="form-group">
          <label for="byte">Bytes</label>
          <input type="number" id="bytes" name="byte" class="form-control" value="{{old('byte')}}">
          <small class="text-danger">{{$errors->first('byte')}}</small>
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price</label>
          <input type="number" id="unitPrice" name="unitPrice" class="form-control" value="{{old('unitPrice')}}">
          <small class="text-danger">{{$errors->first('unitPrice')}}</small>
        </div>
        <button type="sumbit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection
