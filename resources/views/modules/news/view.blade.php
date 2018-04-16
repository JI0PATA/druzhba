{{ config(['app.title' => 'Новости']) }}

@extends('layouts.app')

@section('content')
    <section class="page wp">
        <div class="page__img">
            <a href="{{ asset('img/news/'.$news['img']) }}" data-lightbox="view">
                <img src="{{ asset('img/news/'.$news['img']) }}" alt="">
            </a>
        </div>
        <div class="page__info">
            <div class="page__title">
                {{ $news['title'] }}
            </div>
            <div class="page__text">
                {{ $news['created_at']->format('d.m.Y H:i') }}
            </div>
            <div class="page__text">
                {!! $news['description'] !!}
            </div>
        </div>
    </section>
@endsection