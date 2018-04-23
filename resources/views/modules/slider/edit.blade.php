@extends('layouts.admin')

@section('content')
    <form class="slides wp" action="{{ route('updateSlide', ['id' => $slide['id']]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="slides__item">
            <img src="{{ asset('img/slider/'.$slide['img']) }}" alt="" class="slides__img">
            <div class="slides__description">
                {!! $slide['description'] !!}
            </div>
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <textarea name="description" id="textarea" required>
            {!! $slide['description'] !!}
        </textarea>
        </div>
        <button>Сохранить</button>
        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteSlide', ['id' => $slide['id']]) }}'" href="#">Удалить</a>
    </form>
@endsection