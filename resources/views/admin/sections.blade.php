@extends('layouts.admin')

@section('content')
    <div class="wp sections">
        <a href="{{ route('addSection') }}">Добавить секцию</a><br><br>
        @foreach($sections as $section)
            <div class="section__item">
                <div class="section__name">
                    {{ $section['name'] }}
                </div>
                <div class="actions">
                    <a href="{{ route('editSection', ['id' => $section['id']]) }}">Изменить</a><br>
                    <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteSection', ['id' => $section['id']]) }}'" href="#">Удалить</a><br><br>
                </div>
            </div>
        @endforeach
    </div>
@endsection