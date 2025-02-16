<div class="latest-products">
    <div class="container">
        <div class="row popular-books">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>@lang('main.most-popular')</h2>
                </div>
            </div>
            @include('ajax/books-load')
        </div>
        <div class="container text-center pb-5">
            <a class="load-more filled-button" href="{{ Request::fullUrl() . '/page=2' }}">
                @lang('main.load-more')
            </a>
        </div>
    </div>
</div>
