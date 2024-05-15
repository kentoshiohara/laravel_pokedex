<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://pokeapi.co/api/v2/pokemon?limit=151');
        $pokemons = json_decode($response->getBody()->getContents(), true);
        $pokemons = $pokemons['results'];

        return view('pokedex', compact('pokemons'));
    }
}
