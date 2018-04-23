@extends('layouts.admin')

@section('content')
    <div class="slides wp">
        <a href="{{ route('addSlide') }}">Добавить слайд</a><br><br>
        @foreach($slides as $slide)
            <div class="slides__item">
                <img src="{{ asset('img/slider/'.$slide['img']) }}" alt="" class="slides__img">
                <div class="slides__description">
                    {!! $slide['description'] !!}
                </div>
            </div>
            <a href="{{ route('editSlide', ['id' => $slide['id']]) }}">Изменить</a><br>
            <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteSlide', ['id' => $slide['id']]) }}'" href="#">Удалить</a><br><br>
        @endforeach
    </div>
@endsection