<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
@include('header')
<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Часто задаваемые вопросы</h2>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="accordion">
                    <li>
                        <a>Что такое Lootbooks?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Lootbooks это онлайн книжный магазин, миссия которого финансово поддерживать независимые книжные магазины в России.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Что такое независимый книжный магазин?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Это книжный магазин, который не принадлежит крупному бизнесу. Независимый книжный – это локальный бизнес, владельцы которого полноценно участвуют в его работе.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Как Lootbooks помогает независимым книжным магазинам?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Мы переводим большую часть своей прибыли напрямую независимым книжным.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Зачем поддерживать независимые книжные магазины?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Почему важно поддерживать независимые книжные:
                            </p>
                            <ul class="bullet-list faq-list">
                                <li>
                                    Независимые книжные поддерживают небольшие издательства и малоизвестных авторов.
                                </li>
                                <li>
                                    Поддержка локального и малого бизнеса в России.
                                </li>
                                <li>
                                    Независимые книжные - это культурные центры, где проводятся  презентации, кружки для детей, клубы по интересам, авторские встречи.
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
                                    Физический контакт с книгами.
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a>Как книжном магазину стать партнером?</a>
                        <div class="content" style="display: none;">
                            <p>
                                См. <a class="inner-link" href="{{ url('/partners') }}">Как стать партнером</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Какие книги можно купить на Lootbooks.ru?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Пока у нас можно купить только цифровые и аудио книги. Но скоро добавим и бумажные книги.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a>Как Lootbooks зарабатывает?</a>
                        <div class="content" style="display: none;">
                            <p>
                                Lootbooks зарабатывает, размещая рекламу на своих площадках.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('footer')
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Additional Scripts -->
<script src="{{ asset('/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/accordions.js') }}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>
</body>
</html>
