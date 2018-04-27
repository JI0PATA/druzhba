@extends('layouts.admin')

@section('content')
    <div class="list__items_hor wp">
        @foreach($reviews as $review)
            <div class="list__item_text">
                <div class="list__item_text_description">
                    <div class="list__item_text_user">
                        <div class="list__item_text-title">
                            {{ $review['name'] }}
                        </div>
                        <div class="list__item_text-date">
                            Отправлено: {{ $review['created_at']->format('d.m.Y H:i') }}
                        </div><br>
                        <div class="list__item_text-date">
                            {{ $review['type'] }}
                        </div>
                    </div>
                    <div class="list__item_test-description">
                        {{ $review['comment'] }}
                    </div>
                    @if($review['active'] === 0)
                        <a href="{{ route('activeReview', ['id' => $review['id']]) }}">Опубликовать</a><br>
                    @else
                        <a href="{{ route('blockReview', ['id' => $review['id']]) }}">Заблокировать</a><br>
                    @endif
                    <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteReview', ['id' => $review['id']]) }}'" href="#">Удалить</a><br><br>
                </div>
            </div>
        @endforeach
    </div>
@endsection