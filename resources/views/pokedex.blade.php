<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ asset('css/pokedex.css')}}">
</head>
<body>
    <main class="pokedex-main">
        <h1 class="pokedex-title">Pokedex</h1>
        <div class="container">
            @foreach ($detailedPokemons as $pokemon)
            <div class="card">
                <div class="pokedex-card">
                    <a href="{{ route('pokedex.show', ['name' => $pokemon['name']]) }}">
                        <img src="{{ $pokemon['image'] }}" alt="{{ $pokemon['name'] }}">
                    </a>
                </div>
                <p>#{{$pokemon['number']}} {{ $pokemon['name'] }}</p>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>
