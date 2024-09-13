@include('head')

<body>
@include('header')
@include('banner')
<script>
    new Splide( '.splide', {
        heightRatio: 1.1,
    } ).mount();
</script>
@include('most-popular')
@include('footer')
