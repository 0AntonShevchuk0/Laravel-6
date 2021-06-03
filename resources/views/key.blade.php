@extends('layouts.main');

@section('content')
    <div class="info_content">
        <div class="key_title">ВАШ КЛЮЧ</div>
        <div class="key_value">{{$key}}</div>
        <a href="{{route('catalogue')}}" class="home_link">На головну</a>
    </div>
@endsection
