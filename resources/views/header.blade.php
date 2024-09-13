<header class="">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container col-2">
            @if(Request::is('/'))
                <span class="navbar-brand"><h2>Loot<em>Books</em></h2></span>
            @else
                <a class="navbar-brand" href="/"><h2>Loot<em>Books</em></h2></a>
            @endif
        </div>
        @include('menu')
        <form class="input-group col-6" action="search">
            <input type="text" class="form-control" name="query" placeholder="@lang('main.search_book')" aria-label="Search" aria-describedby="search-addon" id="input-url" data-filter="">
            <button class="btn btn-outline-danger search-button" data-mdb-ripple-init type="submit">@lang('main.search')</button>
        </form>
    </nav>
</header>
@include('mobile-menu')

