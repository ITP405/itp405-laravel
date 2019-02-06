<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
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
    public function create()
    {
      $albums = DB::table('albums')->get();
      $mediaType = DB::table('media_types')->get();
      $genres = DB::table('genres')->get();
      return view('track.create',[
        'albums' => $albums,
        'mediaType' => $mediaType,
        'genres' => $genres
      ]);
    }
    public function store(Request $request)
      {
          $input = $request->all();
          $validation = Validator::make($input, [
            'name' => 'required',
            'album' => 'required',
            'media' => 'required',
            'genre' => 'required',
            'composer' => 'required',
            'millisecond' => 'required',
            'byte' => 'required',
            'unitPrice' => 'required'
          ]);

          if($validation->fails())
          {
            return redirect('/tracks/new')
              ->withInput()
              ->withErrors($validation);
           }
          //otherwise insert the playlist into the db
          DB::table('tracks')->insert([
            'Name' => $request->name,
            'AlbumId' => $request->album,
            'MediaTypeId' => $request->media,
            'GenreId' => $request->genre,
            'Composer' => $request->composer,
            'Milliseconds' => $request->millisecond,
            'Bytes' => $request->byte,
            'UnitPrice'=>$request->unitPrice

          ]);
          return redirect('/tracks');
      }
}
