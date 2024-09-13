<footer>
    <div class="container">
        <footer class="pb-4">
            @include('menu')
            <div class="row">
                <span class="col-md-4"></span>
            <p class="col-md-4 text-center text-muted">&copy; 2024 Lootbooks</p>
            <a href="{{ url('/user-agreement') }}" class="col-md-4 text-center footer-link">Пользовательское соглашение</a>
            </div>
        </footer>
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


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>
</body>
</html>
