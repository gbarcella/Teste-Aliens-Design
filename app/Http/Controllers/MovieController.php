<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constants;
use App\Models\Movie;

class MovieController extends Controller
{

    public function searchMovies(Request $request)
    {
        if(isset($_GET['numero_pagina'])){
            $page = $request->get('numero_pagina');
            $query = $request->get('nome_filme');
            $queryFinal = str_replace(' ', '-', $query);
            
        } else {
            $page = 1;
            $query = $request->get('nome_filme');
            $queryFinal = str_replace(' ', '-', $query);
        }

        $url = Constants::URL_BASE_API_MOVIES_SEARCH . $queryFinal . '&page=' . $page . '&language=pt-BR';
        $jsonData = file_get_contents($url);
        $movies = json_decode($jsonData, true);
        
        return view('movies.list', compact("movies"));
    }

    public function movieDetails($id)
    {
        $url = Constants::URL_BASE_API_MOVIES_DETAILS . $id . '?api_key=' . Constants::API_KEY . '&language=pt-BR';
        $jsonData = file_get_contents($url);
        $movie = json_decode($jsonData, true);

        return view('movies.details', compact("movie"));
    }

}