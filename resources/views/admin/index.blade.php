@extends('layouts.admin')

@section('content')
    <div class="slides wp">
        @foreach($slides as $slide)
            <div class="slides__item">
                <img src="{{ asset('img/slider/'.$slide['img']) }}" alt="" class="slides__img">
                <div class="slides__description">
                    {{ $slide['description'] }}
                </div>
            </div>
        @endforeach
    </div>
@endsection