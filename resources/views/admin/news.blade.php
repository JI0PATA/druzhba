@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addNews') }}">Добавить новость</a>
    </div>
    <div class="list__items_text wp" id="news">
        @foreach($news as $item)
            <div class="list__item_text">
                <div class="list__item_text_img"
                     style="background-image: url({{ asset('img/news/'.$item['img']) }})"></div>
                <div class="list__item_text_description">
                    <div class="list__item_text-title">
                        {{ $item['title'] }}
                    </div>
                    <div class="list__item_text-date">
                        Дата публикации: {{ $item['created_at']->format('d.m.Y') }}
                    </div>
                    <div class="list__item_text-description">
                        {!! $item['description'] !!}
                    </div>
                    <div>
                        <a href="{{ route('editNews', ['id' => $item['id']]) }}">Изменить</a><br>
                        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteNews', ['id' => $item['id']]) }}'" href="#">Удалить</a><br><br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection