{{ config(['app.title' => 'Тренеры']) }}

@extends('layouts.app')

@section('content')
    <section class="page wp">
        <div class="page__img">
            <a href="{{ asset('img/mentors/'.$mentor['img']) }}" data-lightbox="view">
                <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
            </a>
        </div>
        <div class="page__info">
            <div class="page__title">
                Имя: {{ $mentor['name'] }}
            </div>
            <div class="page__text">
                Секция: {{ $mentor['section'] }}
            </div>
            <div class="page__text">
                Года, которые тренирует: {!! $mentor['years'] !!}
            </div>
        </div>
    </section>
@endsection