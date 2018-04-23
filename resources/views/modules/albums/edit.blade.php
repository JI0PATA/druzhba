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
        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteAlbum', ['id' => $album['id']]) }}'" href="#">Удалить</a>
    </form>
@endsection