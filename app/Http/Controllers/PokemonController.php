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

        $detailedPokemons = [];
        foreach ($pokemons['results'] as $index => $pokemon) {
            $pokemonDetails = $client->get($pokemon['url']);
            $pokemonDetails = json_decode($pokemonDetails->getBody()->getContents(), true);
            $detailedPokemons[] = [
                'number' => $index + 1,
                'name' => $pokemon['name'],
                'image' => $pokemonDetails['sprites']['front_default'],
            ];
        }

        return view('pokedex', compact('detailedPokemons'));
    }

    public function show($name)
    {
        $client = new Client();
        $pokemonDetails = $client->get("https://pokeapi.co/api/v2/pokemon/{$name}");
        $pokemon = json_decode($pokemonDetails->getBody()->getContents(), true);

        return view('pokemon', ['pokemon' => $pokemon]);
    }
}
