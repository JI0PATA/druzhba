@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('updateSchedule', ['id' => $schedule['id']]) }}" method="POST"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="hidden" name="day" required value="{{ $schedule['day'] }}">
        </div>
        <div>
            <input type="time" name="time_start" required placeholder="Время начала тренировки" class="form-control"
                   value="{{ $schedule['time_start'] }}">
        </div>
        <div>
            <select name="section_id" class="form-control">
                <option value="" disabled>Выберите секцию</option>
                @foreach($sections as $section)
                    <option value="{{ $section['id'] }}"
                    @if($schedule['section_id'] === $section['id']) {{ 'selected' }} @endif
                    >{{ $section['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="mentor_id" class="form-control">
                <option value="" disabled>Выберите тренера</option>
                @foreach($mentors as $mentor)
                    <option value="{{ $mentor['id'] }}"
                    @if($schedule['id'] === $mentor['id']) {{ 'selected' }} @endif
                    >{{ $mentor['name'] }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn">Сохранить</button>
    </form>
@endsection