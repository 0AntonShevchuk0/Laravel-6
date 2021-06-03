@extends('layouts/main')

@section('content')
    <div class="content">
        <div class="catalogue_title">КАТАЛОГ</div>
        <div class="games">
            @for ($i = 0; $i < sizeof($data) / 2; $i++)
            <div class="games_row">
                @for ($j = 0; $j < 2 && ($i * 2 + $j) < sizeof($data); $j++)
                <div class="game_preview">
                    <img src={{$data[$i * 2 + $j]->image}}>
                    <div class="game_title">{{$data[$i * 2 + $j]->title}}</div>
                    <a href="{{route('info', ['id'=>$data[$i * 2 + $j]->id, 'id_game'=>$data[$i * 2 + $j]->id_game])}}" class="game_details_link">Детальніше</a>
                </div>
                @endfor
            </div>
            @endfor
            <a href="{{route('add')}}" class="add_key_link">ДОДАТИ КЛЮЧ</a>
        </div>
    </div>
@endsection

