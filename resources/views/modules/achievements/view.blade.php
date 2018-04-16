{{ config(['app.title' => 'Достижение']) }}

@extends('layouts.app')

@section('content')
    <section class="page wp">
        <div class="page__img">
            <a href="{{ asset('img/cup/'.$achievement['img']) }}" data-lightbox="view">
                <img src="{{ asset('img/cup/'.$achievement['img']) }}" alt="">
            </a>
        </div>
        <div class="page__info">
            <div class="page__title">
                Название: {{ $achievement['name'] }}
            </div>
            <div class="page__text">
                Год: {{ $achievement['year'] }}
            </div>
            <div class="page__text">
                Участники: {!! $achievement['competitorsYear'] !!}
            </div>
        </div>
    </section>
@endsection