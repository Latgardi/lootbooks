<!DOCTYPE html>
@php
    use App\Models\Book;
    $book = Book::with('authors')->get()->first();
@endphp

<html lang="ru">
@include('head')
<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

<div id="header-wrap">

    <div class="top-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="#"><i class="icon icon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-youtube-play"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-behance-square"></i></a>
                            </li>
                        </ul>
                    </div><!--social-links-->
                </div>
                <div class="col-md-6">
                    <div class="right-element">
                        <a href="#" class="user-account for-buy"><i
                                class="icon icon-user"></i><span>Account</span></a>
                        <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
									$)</span></a>

                        <div class="action-menu">

                            <div class="search-bar">
                                <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                    <i class="icon icon-search"></i>
                                </a>
                                <form role="search" method="get" class="search-box">
                                    <input class="search-field text search-input" placeholder="Search"
                                           type="search">
                                </form>
                            </div>
                        </div>

                    </div><!--top-right-->
                </div>

            </div>
        </div>
    </div><!--top-content-->

    <header id="header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <div class="main-logo">
                        <a href="index.html"><img src="images/main-logo.png" alt="logo"></a>
                    </div>

                </div>

                <div class="col-md-10">

                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list">
                                <li class="menu-item active"><a href="#home">Home</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">Pages</a>

                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About <span class="badge bg-dark">PRO</span></a></li>
                                        <li><a href="styles.html">Styles <span class="badge bg-dark">PRO</span></a></li>
                                        <li><a href="blog.html">Blog <span class="badge bg-dark">PRO</span></a></li>
                                        <li><a href="single-post.html">Post Single <span
                                                    class="badge bg-dark">PRO</span></a></li>
                                        <li><a href="shop.html">Our Store <span class="badge bg-dark">PRO</span></a>
                                        </li>
                                        <li><a href="single-product.html">Product Single <span
                                                    class="badge bg-dark">PRO</span></a></li>
                                        <li><a href="contact.html">Contact <span class="badge bg-dark">PRO</span></a>
                                        </li>
                                        <li><a href="thank-you.html">Thank You <span
                                                    class="badge bg-dark">PRO</span></a></li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
                                <li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
                                <li class="menu-item"><a href="#special-offer" class="nav-link">Offer</a></li>
                                <li class="menu-item"><a href="#latest-blog" class="nav-link">books</a></li>
                                <li class="menu-item"><a href="#download-app" class="nav-link">Download App</a></li>
                                <li class="menu-item"><a
                                        href="https://templatesjungle.gumroad.com/l/booksaw-free-html-bookstore-template"
                                        class="nav-link btn btn-outline-dark rounded-pill m-0" target="_blank">Get
                                        PRO</a></li>
                            </ul>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>

                        </div>
                    </nav>

                </div>

            </div>
        </div>
    </header>

</div><!--header-wrap-->

<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="row">

                    <div class="col-md-6">
                        <figure class="products-thumb">
                            <img
                                src="https://img4.labirint.ru/rc/d7ee202677c7e053e8d55fbc054cb81d/363x561q80/books92/914868/cover.jpg?1669984569"
                                alt="book" class="single-image">
                        </figure>
                    </div>

                    <div class="col-md-6">
                        <div class="product-entry">
                            <h2 class="section-title divider">{{ $book->title }}</h2>

                            <div class="products-content">
                                <div class="author-name">{{ $book->authors->first()->full_name_genetivus }}</div>
                                <h3 class="item-title">Babylon</h3>
                                <p>{{ $book->annotation }}</p>
                                <div class="item-price">$ 45.00</div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-accent-arrow">shop it now <i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- / row -->

            </div>

        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <div class="footer-item">
                    <div class="company-brand">
                        <img src="images/main-logo.png" alt="logo" class="footer-logo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus
                            nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames
                            semper erat ac in suspendisse iaculis.</p>
                    </div>
                </div>

            </div>

            <div class="col-md-2">

                <div class="footer-menu">
                    <h5>About Us</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">vision</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">books </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">careers</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">service terms</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">donate</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-2">

                <div class="footer-menu">
                    <h5>Discover</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Books</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Authors</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Subjects</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Advanced Search</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-2">

                <div class="footer-menu">
                    <h5>My account</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">Sign In</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">View Cart</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">My Wishtlist</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Track My Order</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-2">

                <div class="footer-menu">
                    <h5>Help</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#">Help center</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Report a problem</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Suggesting edits</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Contact us</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!-- / row -->

    </div>
</footer>

<div id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="copyright">
                    <div class="row">

                        <div class="col-md-6">
                            <p>© 2022 All rights reserved. Free HTML Template by <a
                                    href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
                        </div>

                        <div class="col-md-6">
                            <div class="social-links align-right">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-youtube-play"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-behance-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div><!--grid-->

            </div><!--footer-bottom-content-->
        </div>
    </div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>

</html>
