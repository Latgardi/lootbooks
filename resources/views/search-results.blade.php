<div class="latest-products">
    <div class="container">
        @if ($books !== null)
        <div class="row popular-books">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>@lang('main.search-results')</h2>
                </div>
            </div>
            @include('ajax/books-search-load')
        </div>
            <div class="container text-center pb-5">
                <a class="load-more-search filled-button" data-offset="{{ $offset }}">
                    @lang('main.load-more')
                </a>
            </div>
        @else
            @include('search-results-empty')
        @endif
    </div>
</div>
