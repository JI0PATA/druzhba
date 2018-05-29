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
            <input type="text" name="name" value="{{ $mentor['name'] }}" placeholder="ФИО">
        </div>
        <div>
            <input type="text" name="section" value="{{ $mentor['section'] }}" placeholder="Секция">
        </div>
        <div>
            <input type="text" name="years" value="{{ $mentor['years'] }}" placeholder="Номер телефона">
        </div>
        <button>Сохранить</button>
        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteMentor', ['id' => $mentor['id']]) }}'" href="#">Удалить</a>
    </form>
@endsection