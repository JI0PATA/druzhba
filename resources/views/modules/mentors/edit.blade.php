@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateMentor', ['id' => $mentor['id']]) }}" method="POST"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="small-img">
            <img src="{{ asset('img/mentors/'.$mentor['img']) }}" alt="">
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="text" name="name" value="{{ $mentor['name'] }}">
        </div>
        <div>
            <input type="text" name="section" value="{{ $mentor['section'] }}">
        </div>
        <div>
            <input type="text" name="years" value="{{ $mentor['years'] }}">
        </div>
        <button>Сохранить</button>
        <a href="{{ route('deleteMentor', ['id' => $mentor['id']]) }}">Удалить</a>
    </form>
@endsection