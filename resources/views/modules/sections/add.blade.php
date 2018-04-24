@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createSection') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" required placeholder="Наименования секции" autofocus>
        </div>
        <button class="btn">Добавить</button>
    </form>
@endsection