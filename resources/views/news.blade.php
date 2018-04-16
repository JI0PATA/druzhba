{{ config(['app.title' => 'Новости']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>Новости</h2>
    </div>

    <div class="list__items_text wp" id="news">
        @foreach($news as $item)
            <div class="list__item_text">
                <a href="{{ asset('img/news/'.$item['img']) }}" data-lightbox="news" style="background-image: url({{ asset('img/news/'.$item['img']) }})" class="list__item_text_img"></a>
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
                        <a href="{{ route('news.page', ['id' => $item['id']]) }}" class="read">Читать..</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection