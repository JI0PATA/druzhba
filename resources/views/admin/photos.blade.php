@extends('layouts.admin')

@section('content')
    <form action="{{ route('updatePhotosInAlbum', ['id' => $idAlbum]) }}" class="wp" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h2>Добавить фото</h2>
        <div>
            <input type="file" name="file[]" multiple="multiple" accept="image/jpeg,image/png" required>
        </div>
        <button class="btn">Добавить</button>
    </form>
    <div class="list__items_hor min-height-auto wp">
        @foreach($photos as $photo)
            <div class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/albums/photos/'.$photo['img']) }})"></div>
                <div class="list__item_title">
                    <a href="{{ route('deletePhotoInAlbum', ['id' => $photo['id']]) }}">Удалить</a><br><br>
                </div>
            </div>
        @endforeach
    </div>
@endsection