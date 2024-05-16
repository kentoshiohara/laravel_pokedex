<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ asset('css/pokemon.css')}}">
</head>
<body>
    <main class="pokemon-main">
        <h2>#{{ $pokemon['id']}} {{ $pokemon['name'] }}</h2>
        <div class="container">
            <div class="card">
                <img class="image" src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}の画像">
            </div>
            <div class="types">
                @foreach ($pokemon['types'] as $key => $pokemon)
                    <div class="box" id="box{{$key}}">
                        <p class="type_color">{{ $pokemon['type']['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="back-btn">
            <a href={{ route('pokedex') }} class="link">戻る</a>
        </div>
    </main>
    <script src="{{ asset('js/pokemon.js')}}"></script>
</body>
</html>
