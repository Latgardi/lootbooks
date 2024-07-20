<section id="billboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>

                <div class="main-slider pattern-overlay">
                    @foreach(\App\Models\Book::all() as $book)
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">{{ $book->title }}</h2>
                            <p>{{ $book->annotation }} </p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="https://img4.labirint.ru/rc/d7ee202677c7e053e8d55fbc054cb81d/363x561q80/books92/914868/cover.jpg?1669984569" alt="banner" class="banner-image">
                    </div><!--slider-item-->
                        @endforeach

                </div><!--slider-->

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>
