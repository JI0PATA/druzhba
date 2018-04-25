@extends('layouts.admin')

@section('content')
    <div class="wp schedules">
        <?php
        $days = [
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота',
            'Воскресенье'
        ];
        ?>
        @foreach($days as $day)
            <div class="schedules__day">
                <h2>{{ $days[$loop->index] }}</h2> <a href="{{ route('addSchedule', ['day' => $loop->index]) }}">Добавить секцию</a>
                <div class="schedules__items">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Время</th>
                            <th>Секция</th>
                            <th>Тренер</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($schedules[$loop->index]))
                            @foreach($schedules[$loop->index] as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ date('H:i', strtotime($item->time_start)) }}</td>
                                    <td>{{ $item->section->name }}</td>
                                    <td>{{ $item->mentor->name }}</td>
                                    <td>
                                        <a href="{{ route('editSchedule', ['id' => $item['id']]) }}" class="btn btn-warning">Изменить</a>
                                        <a onclick="if(confirm('Вы действительно хотите удалить?')) location.href='{{ route('deleteSchedule', ['id' => $item['id']]) }}'" href="#" class="btn btn-danger">Удалить</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
@endsection