{{ config(['app.title' => 'Достижения']) }}

@extends('layouts.app')

@section('content')
    <div class="wp"><br>
        <h2>Тренера</h2>
    </div>

    <div class="list__items_hor wp">
        @foreach($mentors as $mentor)
            <a href="{{ route('mentor.page', ['id' => $mentor['id']]) }}" class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/mentors/'.$mentor['img']) }})"></div>
                <div class="list__item-name">
                    {{ $mentor['name'] }}
                </div>
            </a>
        @endforeach
    </div>
@endsection