<section id="quotation" class="align-center pb-5 mb-5">
    <div class="inner-content">
        <h2 class="section-title divider"> @lang('main.daily_quote')</h2>
        <blockquote data-aos="fade-up">
            <q>{{ $quote->text  }}</q>
            <div class="author-name">{{ $quote->author }}</div>
        </blockquote>
    </div>
</section>
