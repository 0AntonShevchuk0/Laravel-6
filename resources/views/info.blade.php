@extends('layouts.main');

@section('content')
    <div class="info_content">
        <div class="info_title">{{$game->title}}</div>
        <img src="{{$game->image}}">
        <div class="genres">
            @foreach($genres as $genre)
                {{$genre->title}}
            @endforeach
        </div>
        <a href="{{route('key', ['id'=>$gamekey->id])}}" class="key_link">Отримати ключ</a>
        <div class="similar_games_title">Схожі ігри</div>
        <div class="similar_games">
            @foreach($similarGames as $similarGame)
                <div class="similar_game">
                    <img class="similar_game_image" src="{{$similarGame->image}}">
                    <div class="game_title">{{$similarGame->title}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
