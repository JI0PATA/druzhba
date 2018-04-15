@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addMentor') }}">Добавить тренера</a>
    </div>
    <div class="list__items_hor wp">
        @foreach($mentors as $mentor)
            <div class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/mentors/'.$mentor['img']) }})"></div>
                <div class="list__item-title">
                    {{ $mentor['name'] }}
                </div>
                <a href="{{ route('editMentor', ['id' => $mentor['id']]) }}">Изменить</a><br>
                <a href="{{ route('deleteMentor', ['id' => $mentor['id']]) }}">Удалить</a><br><br>
            </div>
        @endforeach
    </div>
@endsection