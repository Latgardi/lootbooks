@include('head')

<body>
@include('header')
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Как стать партнером</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row p-2">
                                <div class="col-md-12">
                                <p class="lead p-2">
                                    Чтобы стать нашим партнером, книжному магазину нужно выполнить следующие
                                    условия:
                                </p>
                                </div>
                            </div>
                            <ol class="text-left ordered-list">
                                <li>Быть независимым книжным магазином в России :)</li>
                                <li>Принять короткую оферту-договор (подписывается через эл. почту)</li>
                                <li>Разместить у себя в магазине один наш плакат. Плакат за наш счет. Размер А4 или А3 на
                                    выбор. Пример плаката ниже.
                                </li>
                            </ol>
                        </div>
                        <div class="text-center">
                            <h5 class="text-content p-2">Как принять оферту</h5>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <div class="col-md-12 pb-2">
                                    <p class="lead p-2"><strong>Шаг 1.</strong> Свяжитесь с нами по почте <a
                                            href="mailto:hello@lootbooks.ru">hello@lootbooks.ru</a> или в Телеграм <a
                                            href="https://t.me/lootbooks">@lootbooks</a>. Укажите в письме свои
                                        контактные данные:</p>
                                    <ul class="text-left bullet-list ordered-list">
                                        <li>Название магазина</li>
                                        <li>Адрес</li>
                                        <li>Контакты (эл. почта, телефон)</li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <p class="lead"><strong>Шаг 2.</strong> Мы пришлем вам на электронную почту короткую
                                        оферту (договор). Чтобы принять оферту, вам нужно отправить свое согласие
                                        ответным письмом.</p>
                                </div>
                                <div class="col-md-12">
                                    <p class="lead"><strong>Готово!</strong> Мы добавим вас в список своих партнеров и
                                        отправим плакат для вашего магазина.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('assets/images/poster.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
