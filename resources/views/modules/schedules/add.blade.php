@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createSchedule') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div>
            <input type="hidden" name="day" required value="{{ $day }}">
        </div>
        <div>
            <input type="time" name="time_start" required placeholder="Время начала тренировки" class="form-control">
        </div>
        <div>
            <select name="section_id" class="form-control">
                <option value="" disabled>Выберите секцию</option>
                @foreach($sections as $section)
                    <option value="{{ $section['id'] }}">{{ $section['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="mentor_id" class="form-control">
                <option value="" disabled>Выберите тренера</option>
                @foreach($mentors as $mentor)
                    <option value="{{ $mentor['id'] }}">{{ $mentor['name'] }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn">Добавить</button>
    </form>
@endsection