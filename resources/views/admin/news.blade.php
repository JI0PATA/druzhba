@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addNews') }}">Добавить новость</a>
    </div>
    <div class="list__items_hor wp">
        @foreach($news as $item)
            <div class="list__item_text">
                <div class="list__item_text_img"
                     style="background-image: url({{ asset('img/news/'.$item['img']) }})"></div>
                <div class="list__item_text_description">
                    <div class="list__item_text-title">
                        {{ $item['title'] }}
                    </div>
                    <div class="list__item_text-date">
                        Дата публикации: {{ $item['created_at'] }}
                    </div>
                    <div class="list__item_test-description">
                        {!! $item['description'] !!}
                    </div>
                    <a href="{{ route('editNews', ['id' => $item['id']]) }}">Изменить</a><br>
                    <a href="{{ route('deleteNews', ['id' => $item['id']]) }}">Удалить</a><br><br>
                </div>
            </div>
        @endforeach
    </div>
@endsection