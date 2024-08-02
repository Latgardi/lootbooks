    <!DOCTYPE html>
<html lang="ru">

@include('head')

<body>
<!-- Header -->
@include('header')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

@include('search-results', ['query' => $query])

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                                     target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Additional Scripts -->
<script src="{{ asset('/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/accordions.js') }}"></script>


</body>

</html>
