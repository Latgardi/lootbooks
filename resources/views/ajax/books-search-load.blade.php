@php /** @var \Litres\Type\Offers\SearchBook $book */ @endphp
@foreach($books as $book)
    <div class="col-md-4 offers-container" style="display: none" data-offset="{{ $offset ?? null }}">
        <div class="product-item">
            <a href="#"><img src="{{ 'https://www.litres.ru'. $book->coverUrl }}" alt=""></a>
            <div class="down-content">
                <h3 data-widget-litres-book class="text-truncate">{{ $book->title }}</h3>
                <h4 data-widget-litres-author>{{ $book->author }}</h4>
                <script type="text/litres">
                    lfrom: 319128026
                </script>
            </div>
        </div>
    </div>
@endforeach
