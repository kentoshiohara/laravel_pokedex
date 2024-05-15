<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
    <style>
    </style>
</head>
<body>
    <h1>No. {{ $pokemon['id']}} {{ $pokemon['name'] }}</h1>
    <div class="container">
        <div class="card">
            <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}の画像">
        </div>
        <div class="type">
            @foreach ($pokemon['types'] as $pokemon)
                <div class="box">
                    <p>{{ $pokemon['type']['name'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</body>
</html>
