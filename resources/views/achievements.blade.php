{{ config(['app.title' => 'Достижения']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>Достижения</h2>
    </div>

    <div class="list__items_hor wp">
        @foreach($achievements as $achievement)
            <a href="{{ route('achievement.page', ['id' => $achievement['id']]) }}" class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/cup/'.$achievement['img']) }})"></div>
                <div class="list__item-title">
                    {{ $achievement['name'] }}
                </div>
                <div class="list__item-description">
                    {{ $achievement['year'] }}
                </div>
            </a>
        @endforeach
    </div>
@endsection