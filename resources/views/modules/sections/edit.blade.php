@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateSection', ['id' => $section['id']]) }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" value="{{ $section['name'] }}" required>
        </div>
        <button>Сохранить</button>
        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteSection', ['id' => $section['id']]) }}'" href="#">Удалить</a>
    </form>
@endsection