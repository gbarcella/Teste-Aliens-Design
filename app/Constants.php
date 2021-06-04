<?php

namespace App;

class Constants {
    
    const API_KEY = "<insert_your_api_key_here>";
    const URL_BASE_API_MOVIES_SEARCH = "https://api.themoviedb.org/3/search/movie/?api_key=" . self::API_KEY . "&query=";
    const URL_BASE_API_MOVIES_DETAILS = "https://api.themoviedb.org/3/movie/";
}

