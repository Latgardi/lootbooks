<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
@include('header')
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Контакты</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <div class="col-md-12">
                        <p class="lead p-2">По всем вопросам можете связаться с нами по почте <a href="mailto:hello@lootbooks.ru">hello@lootbooks.ru</a><br>или в Телеграм <a href="https://t.me/lootbooks">@lootbooks</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="https://t.me/lootbooks">
                    <img style="max-width: 50%" class="rounded float-right" src="{{asset('assets/images/telegram.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
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
