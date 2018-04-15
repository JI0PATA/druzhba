@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createAlbum') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="file" name="file" required>
        </div>
        <div>
            <input type="text" name="title" required placeholder="Название альбома">
        </div>
        <button class="btn">Добавить</button>
    </form>
@endsection