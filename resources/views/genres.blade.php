@extends('layout')

@section('title', 'Genres')

@section('main')
  <table class="table">
    <tr>
      <th>Genre ID</th>
      <th>Genre Nmae</th>
    </tr>
    @foreach($genres as $genre)
      <tr>
        <td>
          {{$genre->GenreId}}
        </td>
        <td>
          <a href="tracks?genre={{$genre->Name}}"> {{$genre->Name}}</a>
        </td>
        <td>
          <a href="genres/{{$genre->GenreId}}/edit"> Edit </a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
