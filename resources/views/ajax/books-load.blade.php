@php /** @var \Litres\Type\Offers\Offer $book */ @endphp
@foreach($books as $book)
    <div class="col-md-4 offers-container" style="display: none">
        <div class="product-item">
            <a href="#"><img src="{{ $book->picture }}" alt=""></a>
            <div class="down-content">
                <h3 data-widget-litres-book class="text-truncate">{{ $book->name }}</h3>
                <h4 data-widget-litres-author>{{ $book->author }}</h4>
                <div class="text-truncate-container">
                    <p>{!! $book->description?->first() !!}</p>
                </div>
                <script type="text/litres">
                    lfrom: 319128026
                </script>
            </div>
        </div>
    </div>
@endforeach
