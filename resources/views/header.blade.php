<header class="">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            @if(Request::is('/'))
                <span class="navbar-brand"><h2>Loot<em>Books</em></h2></span>
            @else
                <a class="navbar-brand" href="/"><h2>Loot<em>Books</em></h2></a>
            @endif
        </div>
        <div class="container search-container">
            <form class="form-inline" action="search">
                <input type="text" class="form-control" name="query" placeholder="@lang('main.search_book')" id="input-url" data-filter="">
                <button class="btn btn-outline-danger search-button" type="submit">@lang('main.search')</button>
            </form>
            <script>
                const autoCompleteJS = new autoComplete({
                    selector: '#input-url',
                    data: {
                        src: async (query) => {
                            try {
                                // Fetch Data from external Source
                                const source = await $.ajax({
                                    url: "/api/suggestions",
                                    type: "GET",
                                    data: {
                                        query: $('#input-url').val()
                                    }
                                });
                                return source
                            } catch (error) {
                                return error;
                            }
                        }
                    },
                    resultItem: {
                        tag: "li",
                        class: "autoComplete_result",
                        element: (item, data) => {
                            item.setAttribute("data-parent", "food-item");
                        },
                        highlight: "autoComplete_highlight",
                        selected: "autoComplete_selected"
                    },
                });
            </script>
        </div>
    </nav>
</header>

