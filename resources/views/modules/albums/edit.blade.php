@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateAlbum', ['id' => $album['id']]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="small-img">
            <img src="{{ asset('img/albums/'.$album['img']) }}" alt="">
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="text" name="title" placeholder="Название альбома" value="{{ $album['title'] }}">
        </div>
        <button>Сохранить</button>
        <a href="{{ route('deleteAchievement', ['id' => $album['id']]) }}">Удалить</a>
    </form>
@endsection