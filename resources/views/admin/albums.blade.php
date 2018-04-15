@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addAlbum') }}">Добавить альбом</a>
    </div>
    <div class="list__items_hor min-height-auto wp">
    @foreach($albums as $album)
            <div class="list__item">
                <div class="list__item-img" style="background-image: url({{ asset('img/albums/'.$album['img']) }})"></div>
                <div class="list__item_title">
                    <span>{{ $album['title'] }}</span><br>
                    <a href="{{ route('photosInAlbum', ['id' => $album['id']]) }}">Обзор</a><br>
                    <a href="{{ route('editAlbum', ['id' => $album['id']]) }}">Изменить</a><br>
                    <a href="{{ route('deleteAlbum', ['id' => $album['id']]) }}">Удалить</a><br><br>
                </div>
            </div>
        @endforeach
    </div>
@endsection