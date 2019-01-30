<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GenresController extends Controller
{
    public function index(Request $request){

        $genres = DB::table('genres')->get();
        return view('genres',[
          'genres' => $genres
        ]);
    }
}
