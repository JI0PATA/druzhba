{{ config(['app.title' => 'Расписание']) }}

@extends('layouts.app')

@section('content')
    <section class="wp">
        <div class="schedules__sort">
            <p>Для сортировки выберите нужную для Вас секцию:</p>
            <form action="" method="GET">
                <select id="filter" class="form-control" name="filter">
                    <option value="">Отменить фильтр</option>
                    @foreach($sections as $section)
                        <option value="{{ $section['id'] }}"
                        @if(\Request::input('filter') == $section['id']) {{ 'selected' }} @endif
                        >{{ $section['name'] }}</option>
                    @endforeach
                </select>
                <button class="hidden" id="filter__button">Выбрать</button>
                <script>
                    $(document).ready(function () {
                        $('#filter').on('change', _ => {
                            $('#filter__button').click();
                        });
                    });
                </script>
            </form>
        </div>
        <div class="hor-center">
            <h2>Расписание секций</h2>
        </div>
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
        <div class="schedules__items">
            @foreach($days as $day)
                <div class="schedules__item">
                    <div class="schedules__item_title">{{ $day }}</div>
                    <table class="table table-borderless text-center">
                        <thead>
                        <tr>
                            <th scope="col">Время</th>
                            <th scope="col">Секция</th>
                            <th scope="col">Тренер</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($schedules[$loop->index]))
                            @foreach($schedules[$loop->index] as $item)
                                <tr>
                                    <td>{{ date('H:i', strtotime($item->time_start)) }}</td>
                                    <td>{{ $item->section->name }}</td>
                                    <td>{{ $item->mentor->name }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </section>
@endsection