@include('head')
<body>
@include('header')
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Контакты</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <div class="col-md-12">
                        <p class="lead p-2">По всем вопросам можете связаться с нами по почте <a href="mailto:hello@lootbooks.ru">hello@lootbooks.ru</a><br>или в Телеграм <a href="https://t.me/lootbooks">@lootbooks</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="https://t.me/lootbooks">
                    <img style="max-width: 50%" class="rounded float-right" src="{{asset('assets/images/telegram.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
@include('footer')
