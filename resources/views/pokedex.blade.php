<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            width: 150px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <h1>Pokedex</h1>
    <div class="container">
        @foreach ($detailedPokemons as $pokemon)
        <div class="card">
            <h2>No. {{$pokemon['number']}} {{ $pokemon['name'] }}</h2>
            <a href="{{ route('pokedex.show', ['name' => $pokemon['name']]) }}">
                <img src="{{ $pokemon['image'] }}" alt="{{ $pokemon['name'] }}">
            </a>
        </div>
        @endforeach
    </div>
</body>
</html>
