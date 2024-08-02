<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

<!-- ***** Preloader Start ***** -->
{{--<div id="preloader">--}}
{{--    <div class="jumper">--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ***** Preloader End ***** -->

<!-- Header -->
@include('header')

<!-- Page Content -->
<!-- Banner Starts Here -->
{{--<div class="banner header-text">--}}
{{--    <div class="owl-banner owl-carousel">--}}
{{--        <div class="banner-item-01">--}}
{{--            <img src="{{ asset('assets/images/literature.svg') }}">--}}
{{--        </div>--}}
{{--        <div class="mobile-banner-item">--}}
{{--            <img src="{{ asset('assets/images/literature_1.png') }}">--}}
{{--        </div>--}}
{{--        <div class="mobile-banner-item">--}}
{{--            <img src="{{ asset('assets/images/literature_2.png') }}">--}}
{{--        </div>--}}
{{--        <div class="mobile-banner-item">--}}
{{--            <img src="{{ asset('assets/images/literature_3.png') }}">--}}
{{--        </div>--}}
{{--        <div class="mobile-banner-item">--}}
{{--            <img src="{{ asset('assets/images/literature_4.png') }}">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Banner Ends Here -->
@include('banner')
<script>
    new Splide( '.splide', {

    } ).mount();
</script>
@include('most-popular')

@include('footer')


<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Additional Scripts -->
<script src="{{ asset('/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/accordions.js') }}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
