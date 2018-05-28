@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateNews', ['id' => $news['id']]) }}" method="POST"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="small-img">
            <img src="{{ asset('img/news/'.$news['img']) }}" alt="">
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="text" name="title" value="{{ $news['title'] }}">
        </div>
        <div>
            <textarea name="description" id="textarea" required>
                {!! $news['description'] !!}
            </textarea>

            <button>Сохранить</button>
            <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteNews', ['id' => $news['id']]) }}'" href="#">Удалить</a>
    </form>
@endsection