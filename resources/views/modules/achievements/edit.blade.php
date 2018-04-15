@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateAchievement', ['id' => $achievement['id']]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="small-img">
            <img src="{{ asset('img/cup/'.$achievement['img']) }}" alt="">
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="text" name="name" value="{{ $achievement['name'] }}">
        </div>
        <div>
            <input type="text" name="year" value="{{ $achievement['year'] }}">
        </div>
        <div>
            <textarea name="competitorsYear" id="textarea" required>
            {!! $achievement['competitorsYear'] !!}
        </textarea>
        </div>
        <button>Сохранить</button>
        <a href="{{ route('deleteAchievement', ['id' => $achievement['id']]) }}">Удалить</a>
    </form>
@endsection