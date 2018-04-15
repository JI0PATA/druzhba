@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createAchievement') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="file" name="file" required>
        </div>
        <div>
            <input type="text" name="name" required placeholder="Наименование">
        </div>
        <div>
            <input type="text" name="year" required placeholder="Года">
        </div>
        <div>
            <textarea name="competitorsYear" id="textarea" required placeholder="Участники"></textarea>
        </div>
        <button class="btn">Добавить</button>
    </form>
@endsection