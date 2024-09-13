@include('head')
<body>
@include('header')
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>О проекте</h2>
                </div>
            </div>
            <div class="col-md-12">
                <p class="lead p-2">
                    Мы верим, что книжные магазины важны для культуры и общества. Они играют важную роль в поддержке
                    грамотности и распространении знаний в обществе. К тому же, их присутствие делает городские улицы
                    уютнее и наполняет нашу жизнь красками
                </p>
                <p class="lead p-2">
                    Мы создали Lootbooks.ru чтобы финансово поддержать независимые книжные магазины в эпоху
                    маркетплейсов.
                </p>
                <p class="lead p-2">
                    Лучший способ поддержать свой любимый книжный магазин, это купить книгу у них. Но если не нашли
                    подходящую - купите её у нас. Так вы получите книгу и за одно поддержите свой любимый книжный.
                </p>
                </p>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="text-center p-3">
            <h5 class="text-content p-2">Как это работает</h5>
        </div>
        <div class="row p-4">
            <div class="col-md-4">
                <div class="left-content text-center">
                    <img style="max-width: 50%" class="rounded" src="{{asset('assets/images/step_1.svg')}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <p class="lead p-2">
                        <strong>1.</strong> Вы выбираете книгу на Lootbooks.ru.<br>
                        <em>*Пока можно купить только цифровые и аудио книги. Скоро добавим и бумажные книги.</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4">
                <div class="left-content text-center">
                    <img style="max-width: 50%" class="rounded" src="{{asset('assets/images/step_2.svg')}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <p class="lead p-2">
                        <strong>2.</strong> При покупке мы переводим вас на сайт нашего партнера Литрес, где вы
                        оформляете покупку.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4">
                <div class="left-content text-center">
                    <img style="max-width: 50%" class="rounded" src="{{asset('assets/images/step_3.svg')}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <p class="lead p-2">
                        <strong>3.</strong> Мы получаем 10% с каждой покупки от нашего партнера. Вся сумма идет в наш
                        фонд поддержки независимых книжных магазинов.
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4">
                <div class="left-content text-center">
                    <img style="max-width: 50%" class="rounded" src="{{asset('assets/images/step_4.svg')}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <p class="lead p-2">
                        <strong>4.</strong> Все деньги из фонда выплачиваем независимым книжным магазинам поровну.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-4">
    <div class="container">
        <div class="text-center p-3">
            <h5 class="text-content p-2">Почему важно поддерживать независимые книжные?</h5>
        </div>
        <ul class="bullet-list about-list">
            <li>
                Независимые книжные поддерживают небольшие издательства и малоизвестных авторов.
            </li>
            <li>
                Поддержка локального и малого бизнеса в России.
            </li>
            <li>
                Деньги остаются в книжной индустрии. И идут на её дальнейшее развитие.
            </li>
            <li>
                Независимые книжные продвигают хорошие книги, а не только популярные книги.
            </li>
            <li>
                Вдохновляют людей читать.
            </li>
            <li>
                Украшают улицы городов.
            </li>
            <li>
                Независимые книжные – это культурные центры, где проводятся  презентации, кружки для детей, клубы по интересам, авторские встречи.
            </li>
            <li>
                Физический контакт с книгами.
            </li>
        </ul>
    </div>
</section>
@include('call_to_action')
@include('footer')
