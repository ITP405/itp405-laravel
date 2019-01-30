<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TracksController extends Controller
{
    public function index(Request $request){

      $query = DB::table('tracks')
        ->select('tracks.Name as name',
                  'albums.Title as title',
                  'artists.Name as artist',
                  'tracks.UnitPrice as price')
        ->join('albums', 'tracks.AlbumId','=', 'albums.AlbumId')
        ->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId')
        ->join('genres', 'tracks.GenreId', '=', 'genres.GenreId');


      if($request->query('genre')){
        $query->where('genres.Name', '=', $request->query('genre'));
      }

      $tracks = $query->get();

      return view('tracks',[
        'tracks' => $tracks
      ]);
    }
}
