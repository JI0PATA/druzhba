{{ config(['app.title' => 'Просмотр альбома']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>{{ $album['title'] }}</h2>
    </div>
    <div class="list__items_hor min-height-auto wp">
        @foreach($photos as $photo)
            <a href="{{ asset('img/albums/photos/'.$photo['img']) }}" class="list__item" data-lightbox="album">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/albums/photos/'.$photo['img']) }})"></div>
            </a>
        @endforeach
    </div>
@endsection