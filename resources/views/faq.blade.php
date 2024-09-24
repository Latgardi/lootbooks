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
                    @foreach($faqs as $faq)
                        <li>
                            <a>{{ $faq->question }}</a>
                            <div class="content" style="display: none;">
                                <p>{!! $faq->answer !!}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@include('footer')
