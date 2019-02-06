@extends('layout')

@section('title', 'Add Track')

@section('main')
<div class="row">
  <div class="col">
    <form  action="/genres" method="post">
          @csrf
          <div class="form-group">
              <input type="hidden" name="genreId" value="{{$genre->GenreId}}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$genre->Name}}">
            <small class="text-danger">{{$errors->first('name')}}</small>
          </div>
          <button type="sumbit" class="btn btn-primary">
            Save
          </button>
        </form>
  </div>
</div>
@endsection
