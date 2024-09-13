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
@include('footer')
