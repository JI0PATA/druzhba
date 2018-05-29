@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createMentor') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="file" name="file" required>
        </div>
        <div>
            <input type="text" name="name" required placeholder="ФИО">
        </div>
        <div>
            <input type="text" name="section" required placeholder="Секция">
        </div>
        <div>
            <input type="text" name="years" required placeholder="Номер телефона">
        </div>
        <button class="btn">Добавить</button>
    </form>
@endsection