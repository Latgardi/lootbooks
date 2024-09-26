@include('head')
<body>
@include('header')
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>{{ $contacts->title }}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <div class="col-md-12">
                        {!! $contacts->text !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{ $contacts->link }}">
                    <img style="max-width: 50%" class="rounded float-right" src="{{ asset('storage/' . $contacts->image) }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
@include('footer')
