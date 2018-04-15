{{ config(['app.title' => 'Главная']) }}

@extends('layouts.app')

@section('content')
    <section id="achievements" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">наши достижения</h2>
            </div>

            <div class="list__items_hor">
                @foreach($achievements as $achievement)
                    <div class="list__item">
                        <div class="list__item-img"
                             style="background-image: url({{ asset('img/cup/'.$achievement['img']) }})"></div>
                        <div class="list__item-title">
                            {{ $achievement['name'] }}
                        </div>
                        <div class="list__item-description">
                            {{ $achievement['year'] }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="hor-right">
                <a href="" class="more">подробнее...</a>
            </div>
        </div>
    </section>

    <section id="mentors" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">наши тренера</h2>
            </div>

            <div class="list__items_hor">
                @foreach($mentors as $mentor)
                    <div class="list__item">
                        <div class="list__item-img"
                             style="background-image: url({{ asset('img/mentors/'.$mentor['img']) }})"></div>
                        <div class="list__item-name">
                            {{ $mentor['name'] }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="hor-right">
                <a href="" class="more">подробнее...</a>
            </div>
        </div>
    </section>

    <section id="news" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">новости</h2>
            </div>

            <div class="list__items_text">
                @foreach($news as $item)
                    <div class="list__item_text">
                        <div class="list__item_text_img"
                             style="background-image: url({{ asset('img/news/'.$item['img']) }})"></div>
                        <div class="list__item_text_description">
                            <div class="list__item_text-title">
                                {{ $item['title'] }}
                            </div>
                            <div class="list__item_text-date">
                                Дата публикации: {{ $item['created_at']->format('d.m.Y') }}
                            </div>
                            <div class="list__item_test-description">
                                {!! $item['description'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="hor-right">
                <a href="" class="more">подробнее...</a>
            </div>
        </div>
    </section>

    <section id="gallery" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">наши галерея</h2>
            </div>

            <div class="list__items_hor min-height-auto">
                @foreach($albums as $album)
                <a href="{{ route('album', ['id' => $album['id']]) }}" class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/albums/'.$album['img']) }})"></div>
                    <div class="list__item_title-hidden">
                        <span>{{ $album['title'] }}</span>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="hor-right">
                <a href="" class="more">подробнее...</a>
            </div>
        </div>
    </section>

    <section id="reviews" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">наши отзывы</h2>
            </div>

            <div class="list__items_text">
                @foreach($reviews as $review)
                    <div class="list__item_text">
                        <div class="list__item_text_description">
                            <div class="list__item_text_user">
                                <div class="list__item_text-title">
                                    {{ $review['name'] }}
                                </div>
                                <div class="list__item_text-date">
                                    Отправлено: {{ $review['created_at']->format('d.m.Y H:i') }}
                                </div>
                            </div>
                            <div class="list__item_test-description">
                                {{ $review['comment'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="hor-right">
                <a href="" class="more">подробнее...</a>
            </div>
        </div>
    </section>

    <section id="callback">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">написать отзыв / предложение</h2>
            </div>

            <div class="callback__forms">
                <form action="{{ route('callback') }}" class="form" method="POST">
                    {{ csrf_field() }}
                    <div class="form__title">Форма</div>
                    <input type="text" class="form__field form__input" placeholder="Введите ваше имя" required
                           name="name">
                    <select type="text" class="form__field form__input" required name="type">
                        <option value="Отзыв">Отзыв</option>
                        <option value="Предложение">Предложение</option>
                    </select>
                    <textarea name="comment" class="form__field form__input form__textarea"
                              placeholder="Введите ваш текст" required></textarea>
                    <button class="form__field form__btn btn">Отправить</button>
                </form>

                <div action="" class="form">
                    <div class="form__title">Пример</div>
                    <input type="text" class="form__field form__input" value="Эдик" disabled>
                    <input type="text" class="form__field form__input" value="Отзыв" disabled>
                    <textarea name="" class="form__field form__input form__textarea" disabled>Очень нравятся ваши мероприятия. Хотелось бы побольше развлечения такого рода. Спасибо за эмоции!
                </textarea>
                    <button type="button" class="form__field form__btn btn">Отправить</button>
                </div>
            </div>
        </div>
    </section>

    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2252.7289283769346!2d49.14206991592561!3d55.624132280519106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ea8777a6406bf%3A0x58145091924133d!2z0J7Qu9C40LzQv9C40LnRgdC60LDRjyDRg9C7LiwgMTMsINCf0LXRgdGH0LDQvdGL0LUg0JrQvtCy0LDQu9C4LCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjI2MjU!5e0!3m2!1sru!2sru!4v1523105328192"
                width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

@endsection