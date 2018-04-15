{{ config(['app.title' => 'Просмотр альбома']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>{{ $album['title'] }}</h2>
    </div>
    <div class="list__items_hor min-height-auto wp">
        @foreach($photos as $photo)
            <div class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/albums/photos/'.$photo['img']) }})"></div>
            </div>
        @endforeach
    </div>
@endsection