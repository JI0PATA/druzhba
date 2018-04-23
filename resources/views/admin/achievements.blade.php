@extends('layouts.admin')

@section('content')
    <div class="wp">
        <a href="{{ route('addAchievement') }}">Добавить достижение</a>
    </div>
    <div class="list__items_hor wp">
    @foreach($achievements as $achievement)
            <div class="list__item">
                <div class="list__item-img"
                     style="background-image: url({{ asset('img/cup/'.$achievement['img']) }})"></div>
                <div class="list__item-title">
                    {{ $achievement['name'] }}
                </div>
                <div class="list__item-description">
                    {{ $achievement['year'] }}
                </div>
                <a href="{{ route('editAchievement', ['id' => $achievement['id']]) }}">Изменить</a><br>
                <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteAchievement', ['id' => $achievement['id']]) }}'" href="#">Удалить</a><br><br>
            </div>
        @endforeach
    </div>
@endsection