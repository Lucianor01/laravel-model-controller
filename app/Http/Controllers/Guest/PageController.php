<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function getPage()
    {
        $movies = Movie::all(); // select * from Movie

        return view('pages.home', compact('movies'));
    }
}
