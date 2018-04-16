{{ config(['app.title' => 'Достижения']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>Отзывы</h2>
    </div>

    <div class="list__items_text wp">
        @foreach($reviews as $review)
            <div class="list__item_text">
                <div class="list__item_text_description">
                    <div class="list__item_text_user">
                        <div class="list__item_text-title">
                            {{ $review['name'] }}
                        </div>
                        <div class="list__item_text-date">
                            Отправлено: {{ $review['created_at']->format('d.m.Y H:i') }}
                        </div>
                    </div>
                    <div class="list__item_text-description">
                        {{ $review['comment'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection