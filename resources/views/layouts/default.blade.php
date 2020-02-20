<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/effect.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="{{ route('search') }}" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="#">Home</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home_v1.html" title="">Home 1</a></li>
                        <li class="level2"><a href="home_v2.html" title="">Home 2</a></li>
                        <li class="level2"><a href="home_v3.html" title="">Home 3</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Shop</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Shop Type</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="category_v1.html" title="">Category V1</a></li>
                                    <li class="level3"><a href="category_v1_2.html" title="">Category V1.2</a></li>
                                    <li class="level3"><a href="category_v2.html" title="">Category V2</a></li>
                                    <li class="level3"><a href="category_v2_2.html" title="">Category V2.2</a></li>
                                    <li class="level3"><a href="category_v3.html" title="">Category V3</a></li>
                                    <li class="level3"><a href="category_v3_2.html" title="">Category V3.2</a></li>
                                    <li class="level3"><a href="category_v4.html" title="">Category V4</a></li>
                                    <li class="level3"><a href="category_v4_2.html" title="">Category V4.2</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Type</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_v1.html" title="">Product Single 1</a></li>
                                    <li class="level3"><a href="product_v2.html" title="">Product Single 2</a></li>
                                    <li class="level3"><a href="product_v3.html" title="">Product Single 3</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Order Page</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cartpage.html" title="">Cart Page</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                    <li class="level3"><a href="compare.html" title="">Compare</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Quickview</a></li>
                                    <li class="level3"><a href="trackyourorder.html">Track Order</a></li>
                                    <li class="level3"><a href="wishlist.html">WishList</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="about.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contact.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog.html" title="Blog Standar">Blog Category</a></li>
                        <li class="level2"><a href="blogdetail.html" title="Blog Gird">Blog Detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!-- Menu Mobile -->
    <div class="menu-mobile-left-content">
        <ul>
            {{-- <li><a href="#"><img src="img/icon_hot.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li> --}}
            @foreach ($categories as $category)
                {{-- <li><a href="{{ route('category', ['name' => $category->name]) }}">{{ $category->name }}</a></li> --}}
                <li><a href="{{ route('category', ['name' => $category->name]) }}"><img src="img/{{ $category->photo }}" alt="Icon {{ $category->name }}" /> <p>{{ $category->name }}</p></a></li>
			@endforeach
            {{-- <li><a href="#"><img src="img/icon_food.png" alt="Icon Food" /> <p>Food</p></a></li>
            <li><a href="#"><img src="img/icon_mobile.png" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
            <li><a href="#"><img src="img/icon_electric.png" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
            <li><a href="#"><img src="img/icon_computer.png" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
            <li><a href="#"><img src="img/icon_fashion.png" alt="Icon Fashion" /> <p>Fashion</p></a></li>
            <li><a href="#"><img src="img/icon_health.png" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
            <li><a href="#"><img src="img/icon_mother.png" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
            <li><a href="#"><img src="img/icon_book.png" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
            <li><a href="#"><img src="img/icon_tablet.png" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
            <li><a href="#"><img src="img/icon_sport.png" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
            <li><a href="#"><img src="img/icon_auto.png" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
            <li><a href="#"><img src="img/icon_voucher.png" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li> --}}
        </ul>
    </div>
    <!-- Header Box -->
    <div class="wrappage">
        <header class="relative full-width box-shadow">
            <div class="clearfix container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class=" header-top">
                            <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                                <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Call us <span class="text-red bold">070-7782-7137</span>
                            </p>
                            <div class="clear-padding menu-header-top text-right col-md-8 col-xs-12 col-sm-6">
                                <ul class="clear-margin">
                                    <li class="relative"><a href="#">My Account</a></li>
                                    <li class="relative"><a href="#">Wishlist</a></li>
                                    <li class="relative">
                                        <a href="#">EN</a>
                                        <ul>
                                            <li class="relative"><a href="#">JP</a></li>
                                            <li class="relative"><a href="#">EN</a></li>
                                            <li class="relative"><a href="#">CN</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a href="#">USD</a>
                                        <ul>
                                            <li class="relative"><a href="#">AUD</a></li>
                                            <li class="relative"><a href="#">USD</a></li>
                                            <li class="relative"><a href="#">CAD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix header-content full-width relative">
                            <div class="clearfix icon-menu-bar">
                                <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu" aria-hidden="true"></i>
                            </div>
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                            <div class="clearfix search-box relative float-left">
                            <form method="GET" action="{{ route('search') }}" class="">
                                    <div class="clearfix category-box relative">
                                        <select name="cate_search">
                                            <option>Toutes les catégories</option>
                                            @foreach ($categories as $category)
                                                <option>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <input type="text" name="s" value="{{ request()->input('s') }}" placeholder="Enter keyword here . . .">
                                    <button type="submit" class="animate-default button-hover-red">Search</button>
                                </form>
                            </div>
                            <div class="clearfix icon-search-mobile absolute">
                                <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">2</p>
                            </div>
                            <div class="cart-detail-header border">
                                <div class="relative">
                                    <div class="product-cart-son clearfix">
                                        <div class="image-product-cart float-left center-vertical-image ">
                                            <a href="#"><img src="img/product_image_6-min.png" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                    <div class="product-cart-son">
                                        <div class="image-product-cart float-left center-vertical-image">
                                            <a href="#"><img src="img/product_image_7-min.png" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">Voyage Yoga Bag</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative border no-border-l no-border-r total-cart-header">
                                    <p class="bold clear-margin">Subtotal:</p>
                                    <p class=" clear-margin bold">$700</p>
                                </div>
                                <div class="relative btn-cart-header">
                                    <a href="#" class="uppercase bold animate-default">view cart</a>
                                    <a href="#" class="uppercase bold button-hover-red animate-default">checkout</a>
                                </div>
                            </div>
                            <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                            <div class="clearfix box-search-mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> all categories</span>
						</a>
                    </div>          
                </div>
            </div>
                    <div class="header-ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu-header">
                                <ul class="main__menu clear-margin">
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">home</a>
                                        <ul class="sub-menu mega-menu">
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                                <p><a href="home_v1.html">Home 1</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                                <p><a href="home_v2.html">Home 2</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                                <p><a href="home_v3.html">Home 3</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">shop</a>
                                        <div class="sub-menu mega-menu-v2">
                                            <ul>
                                                <li>Catgory Type</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Category v2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Category v2.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Category v3</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Category v3.2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Category v4</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                            </ul>
                                            <ul>
                                                <li>Single Product Type</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                            </ul>
                                            <ul>
                                                <li>Order Page</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">pages</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="about.html">About Us</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="contact.html">Contact</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Blog</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="blog.html">Blog Category</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>
        <!-- End Header Box -->

    @yield('content')


        <!-- Footer Box -->
        <footer class="relative full-width">
            <div class=" top-footer full-width">
                <div class="clearfix container-web relative">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
                                <div class="clearfix text-subscribe text-subscribe">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <p>sign up for newsletter</p>
                                    <p>Get updates on discount & counpons.</p>
                                </div>
                                <div class="clearfix form-subscribe">
                                    <input type="text" name="email-subscribe" placeholder="Enter your email . . .">
                                    <button class="animate-default button-hover-red">subscribe</button>
                                </div>
                            </div>
                            <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
                                <a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
                                <a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
                                <a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
                                <a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix container-web relative">
                <div class=" container clear-padding">
                    <div class="row">
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>my account</p>
                            <ul class="list-footer">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Compare</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>information</p>
                            <ul class="list-footer">
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>our services</p>
                            <ul class="list-footer">
                                <li><a href="#">Product Recall</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Returns And Exchanges</a></li>
                                <li><a href="#">Shipping Options</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>contact us</p>
                            <ul class="icon-footer">
                                <li><i class="fa fa-home" aria-hidden="true"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> contact@yourcompany.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> 070-7782-9137</li>
                                <li><i class="fa fa-fax" aria-hidden="true"></i> 070-7782-9138</li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bottom-footer full-width">
                <div class="clearfix container-web">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-7 clear-padding copyright">
                                <p>Copyright © 2018 by EngoCreative. All Rights Reserved.</p>
                            </div>
                            <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                                <div class="icon_logo_footer float-right">
                                    <img src="img/image_payment_footer-min.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer Box -->
    <script src="js/jquery-3.3.1.min.js" defer=""></script>
    <script src="js/bootstrap.min.js" defer=""></script>
    <script src="js/owl.carousel.min.js" defer=""></script>
    <script src="js/sync_owl_carousel.js" defer=""></script>
    <script src="js/scripts.js" defer=""></script>
</body>

</html>