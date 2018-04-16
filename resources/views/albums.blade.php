{{ config(['app.title' => 'Альбомы']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>Альбомы</h2>
    </div>

    <div class="list__items_hor min-height-auto wp">
        @foreach($albums as $album)
            <a href="{{ route('album', ['id' => $album['id']]) }}" class="list__item">
                <div class="list__item-img" style="background-image: url({{ asset('img/albums/'.$album['img']) }})"></div>
                <div class="list__item_title-hidden">
                    <span>{{ $album['title'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection