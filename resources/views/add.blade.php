@extends('layouts.main');

@section('content')
    <div class="info_content">
        <div class="form_title">НОВИЙ КЛЮЧ</div>
        <div class="message">
            @include('includes.messages')
        </div>
        <form action="{{route('add')}}" method="post">
            @csrf
            <div class="key_field">
                <label for="key_value">Введіть ключ</label>
                <input type="text" name="key" id="key_value">
            </div>
            <div class="game_field">
                <label for="game">Оберіть гру</label>
                <select name="game" id="game">
                    @for ($i = 0; $i < sizeof($games); $i++)
                        <option value="{{$games[$i]->id}}">{{$games[$i]->title}}</option>
                    @endfor
                </select>
            </div>
            <button type="submit" id="submit">Додати</button>
        </form>
        <a href="{{route('catalogue')}}" class="home_link">На головну</a>
    </div>
@endsection
