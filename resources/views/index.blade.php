{{ config(['app.title' => 'Главная']) }}

@extends('layouts.app')

@section('content')
    <header id="header">
        <div id="hat" class="wp header__item">
            <div id="hat__items" class="wp">
                <div class="hat__item">
                    <img src="{{ asset('img/rf.jpg') }}" alt="">
                    <img src="{{ asset('img/tat.jpg') }}" alt="">
                    <img src="{{ asset('img/laishevo.gif') }}" alt="">
                </div>
                <div class="hat__item">
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/phone.png') }}" alt="" class="hat__sub-item_img">
                        <span class="hat__sub-item_title">8 (800) 555 35 35</span>
                    </div>
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/location.png') }}" alt="" class="hat__sub-item_img">
                        <span class="hat__sub-item_title">с. Песчаные Ковали, Олимпийская 13, Казань</span>
                    </div>
                </div>
                <div class="hat__item">
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/mail.png') }}" alt="" class="hat__sub-item_img">
                        <span class="hat__sub-item_title">dosug@mail.ru</span>
                    </div>
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/clock.png') }}" alt="" class="hat__sub-item_img">
                        <span class="hat__sub-item_title">пн-вс с 08:00 до 21:00</span>
                    </div>
                </div>
                <div class="hat__item">
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/vk.png') }}" alt="" class="hat__sub-item_img">
                        <a href="https://vk.com/club124311104" class="hat__sub-item_title" target="_blank">vk.com/club124311104</a>
                    </div>
                    <div class="hat__sub-item">
                        <img src="{{ asset('img/instagram.png') }}" alt="" class="hat__sub-item_img">
                        <a href="https://instagram.com/drughba_kovali" class="hat__sub-item_title" target="_blank">instagram.com/drughba_kovali</a>
                    </div>
                </div>
            </div>
            <div class="full-line header__item"></div>
        </div>
        <div id="slider">
            <div class="slider__item" style="background-image: url({{ asset('img/slider/slider1.jpg') }})">
                <div class="hat__main-title wp">
                    <h1 class="hat__main-title_title">
                        спортивно-досуговый центр "дружба"
                    </h1>
                    <div class="hat__main-title_description">
                        Спортивно-досуговый центр "Дружба" - планета, где у самых маленьких исполняются мечты и
                        материализуются
                        глобальные планы.<br>
                        Основная деятельность спортивно-досугового центра - это организация досуга жителей села Песчаные
                        Ковали.
                        В спортивно-досуговый центр малышей с легкостью научат разговаривать, дружить, а также раскроют
                        потенциал ребенка. В данной организации работают разные секции, не только спортивные, но и
                        культурно-массовые.
                    </div>
                </div>
            </div>

            <div class="slider__item" style="background-image: url({{ asset('img/slider/slider1.jpg') }})">
                <div class="hat__main-title wp">
                    <h1 class="hat__main-title_title">
                        спортивно-досуговый центр "дружба"
                    </h1>
                    <div class="hat__main-title_description">
                        Спортивно-досуговый центр "Дружба" - планета, где у самых маленьких исполняются мечты и
                        материализуются
                        глобальные планы.<br>
                        Основная деятельность спортивно-досугового центра - это организация досуга жителей села Песчаные
                        Ковали.
                        В спортивно-досуговый центр малышей с легкостью научат разговаривать, дружить, а также раскроют
                        потенциал ребенка. В данной организации работают разные секции, не только спортивные, но и
                        культурно-массовые.
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="menu">
        <menu class="wp">
            <a href="{{ route('home') }}" class="menu__item">Главная</a>
            <a href="#" class="menu__item">Достижения</a>
            <a href="#" class="menu__item">Тренера</a>
            <a href="#" class="menu__item">Новости</a>
            <a href="#" class="menu__item">Галерея</a>
            <a href="#" class="menu__item">Отзывы и Предложения</a>
            <a href="#" class="menu__item">Расписание</a>
        </menu>
    </div>

    <section id="achievements" class="line-bottom">
        <div class="wp">
            <div class="hor-center">
                <h2 class="title underline">наши достижения</h2>
            </div>

            <div class="list__items_hor">
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup1.jpg') }})"></div>
                    <div class="list__item-title">
                        coupe uefa
                    </div>
                    <div class="list__item-description">
                        Футбол: сезон 2014/16
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup2.jpg') }})"></div>
                    <div class="list__item-title">
                        coupe uefa
                    </div>
                    <div class="list__item-description">
                        Футбол: сезон 2014/16
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup3.jpg') }})"></div>
                    <div class="list__item-title">
                        coupe uefa
                    </div>
                    <div class="list__item-description">
                        Футбол: сезон 2014/16
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup4.jpg') }})"></div>
                    <div class="list__item-title">
                        coupe uefa
                    </div>
                    <div class="list__item-description">
                        Футбол: сезон 2014/16
                    </div>
                </div>
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
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup1.jpg') }})"></div>
                    <div class="list__item-name">
                        Костаков Евгений Николаевич
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup2.jpg') }})"></div>
                    <div class="list__item-name">
                        Костаков Евгений Николаевич
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup3.jpg') }})"></div>
                    <div class="list__item-name">
                        Костаков Евгений Николаевич
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup4.jpg') }})"></div>
                    <div class="list__item-name">
                        Костаков Евгений Николаевич
                    </div>
                </div>
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
                <div class="list__item_text">
                    <div class="list__item_text_img"
                         style="background-image: url({{ asset('img/news/news1.jpg') }})"></div>
                    <div class="list__item_text_description">
                        <div class="list__item_text-title">
                            Проводили масленницу!
                        </div>
                        <div class="list__item_text-date">
                            Дата публикации: 10.03.2018
                        </div>
                        <div class="list__item_test-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                        </div>
                    </div>
                </div>
                <div class="list__item_text">
                    <div class="list__item_text_img"
                         style="background-image: url({{ asset('img/news/news1.jpg') }})"></div>
                    <div class="list__item_text_description">
                        <div class="list__item_text-title">
                            Проводили масленницу!
                        </div>
                        <div class="list__item_text-date">
                            Дата публикации: 10.03.2018
                        </div>
                        <div class="list__item_test-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                        </div>
                    </div>
                </div>
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
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup1.jpg') }})"></div>
                    <div class="list__item_title-hidden">
                        <span>Костаков Евгений Николаевич</span>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup2.jpg') }})"></div>
                    <div class="list__item_title-hidden">
                        <span>Костаков Евгений Николаевич</span>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup3.jpg') }})"></div>
                    <div class="list__item_title-hidden">
                        <span>Костаков Евгений Николаевич</span>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__item-img" style="background-image: url({{ asset('img/cup/cup4.jpg') }})"></div>
                    <div class="list__item_title-hidden">
                        <span>Костаков Евгений Николаевич</span>
                    </div>
                </div>
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
                <div class="list__item_text">
                    <div class="list__item_text_description">
                        <div class="list__item_text_user">
                            <div class="list__item_text-title">
                                Проводили масленницу!
                            </div>
                            <div class="list__item_text-date">
                                Отправлено: 10.03.2018
                            </div>
                        </div>
                        <div class="list__item_test-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                        </div>
                    </div>
                </div>
                <div class="list__item_text">
                    <div class="list__item_text_description">
                        <div class="list__item_text_user">
                            <div class="list__item_text-title">
                                Проводили масленницу!
                            </div>
                            <div class="list__item_text-date">
                                Отправлено: 10.03.2018
                            </div>
                        </div>
                        <div class="list__item_test-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, aut blanditiis
                            eaque
                            eos fugiat nisi nobis numquam odio quam quas sed sit vitae! Beatae debitis ex quisquam quos
                            tempora.
                        </div>
                    </div>
                </div>
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
                <form action="" class="form">
                    <div class="form__title">Форма</div>
                    <input type="text" class="form__field form__input" placeholder="Введите ваше имя" required>
                    <select type="text" class="form__field form__input" required>
                        <option value="0">Отзыв</option>
                        <option value="1">Предложение</option>
                    </select>
                    <textarea name="" class="form__field form__input form__textarea"
                              placeholder="Введите ваш текст" required></textarea>
                    <button class="form__field form__btn btn">Отправить</button>
                </form>

                <form action="" class="form">
                    <div class="form__title">Пример</div>
                    <input type="text" class="form__field form__input" value="Эдик" disabled>
                    <input type="text" class="form__field form__input" value="Отзыв" disabled>
                    <textarea name="" class="form__field form__input form__textarea" disabled>Очень нравятся ваши мероприятия. Хотелось бы побольше развлечения такого рода. Спасибо за эмоции!
                </textarea>
                    <button type="button" class="form__field form__btn btn">Отправить</button>
                </form>
            </div>
        </div>
    </section>

    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2252.7289283769346!2d49.14206991592561!3d55.624132280519106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ea8777a6406bf%3A0x58145091924133d!2z0J7Qu9C40LzQv9C40LnRgdC60LDRjyDRg9C7LiwgMTMsINCf0LXRgdGH0LDQvdGL0LUg0JrQvtCy0LDQu9C4LCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjI2MjU!5e0!3m2!1sru!2sru!4v1523105328192"
                width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

@endsection