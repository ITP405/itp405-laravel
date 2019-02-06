@extends('layout')

@section('title', 'Tracks')

@section('main')
    <a href="/tracks/new">Add track</a>
    <table class="table">
      <tr>
        <th>Track Name</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Price</th>
      </tr>
        @foreach($tracks as $track)
        <tr>
          <td>
            {{$track->name}}
          </td>
          <td>
            {{$track->title}}
          </td>
          <td>
            {{$track->artist}}
          </td>
          <td>
            {{$track->price}}
          </td>
        </tr>
        @endforeach
    </table>
@endsection
