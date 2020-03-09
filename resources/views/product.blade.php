<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		@if (isset($title))
			{{ $title }} | Migouabo
		@else
			Migouabo
		@endif
	</title>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">
	<link rel="stylesheet" type="text/css" href="css/multirange.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/effect.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/category.css">
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
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
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
	<div class="menu-mobile-left-content menu-bg-white">
		<ul>
			@foreach ($categories as $category)
                <li><a href="{{ route('category', ['name' => $category->name]) }}"><img src="img/{{ $category->photo }}" alt="Icon {{ $category->name }}" /> <p>{{ $category->name }}</p></a></li>
			@endforeach
		</ul>
	</div>
	<!-- Header Box -->
	<div class="wrappage">
		<div class="wrappage">
        <header class="relative full-width">
            <div class=" container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class=" header-top">
                            <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                                <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Call us <span class="text-red bold">070-7782-7137</span>
                            </p>
                            <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
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
                                <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                            </div>
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                            <div class="clearfix search-box relative float-left">
							<form method="GET" action="{{ route('search') }}" class="">
                                    <div class="clearfix category-box relative">
                                        <select name="cate_search">
											<option value="all">Toutes les catégories</option>
											@foreach ($categories as $category)
												<option>{{ $category->name }}</option>
											@endforeach
                                        </select>
                                    </div>
                                    <input type="text" name="s" placeholder="Entrer un mot . . .">
                                    <button type="submit" class="animate-default button-hover-red">Rechercher</button>
                                </form>
                            </div>
                            <div class="clearfix icon-search-mobile absolute">
                                <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">{{ Cart::count() }}</p>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="img/icon_cart.png" />
                                <p class="count-total-shopping absolute">{{ Cart::count() }}</p>
                            </div>
                            <div class="cart-detail-header border">
                                <div class="relative">
                                    @foreach (Cart::content() as $cartProduct)

                                    <div class="product-cart-son clearfix">
                                        <div class="image-product-cart float-left center-vertical-image ">
                                            <a href="#"><img src="img/img_270x270/{{ $cartProduct->model->photo }}" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">{{ $cartProduct->name }}</a></p>
                                            <p class="clearfix price-product">  <span class="total-product-cart-son">(x{{ $cartProduct->qty }})</span> {{ $cartProduct->price }} F CFA</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="relative border no-border-l no-border-r total-cart-header">
                                    <p class="bold clear-margin">Sous-total:</p>
                                    <p class=" clear-margin bold">{{ Cart::total() }} F CFA</p>
                                </div>
                                <div class="relative btn-cart-header">
								<a href="{{ route('cart') }}" class="uppercase bold animate-default">Votre panier</a>
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
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> Toutes les catégories</span>
						</a>
                    </div>
                </div>
            </div>
            <div class="menu-header-v3 hidden-ipx">
                <div class="container">
                    <div class="row">
                        <!-- Menu Page -->
                        <div class="menu-header full-width">
                            <ul class="clear-margin">
                                <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> Toutes les catégories</a></li>
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
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class="clearfix menu_more_header menu-web menu-bg-white">
                <ul>
					@foreach ($categories as $category)
					<li><a href="{{ route('category', ['name' => $category->name]) }}"><img src="img/{{ $category->photo }}" alt="Icon {{ $category->name }}" /> <p>{{ $category->name }}</p></a></li>
					@endforeach
                </ul>
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
		<!-- Content Box -->
		<div class="relative full-width">
			<!-- Breadcrumb -->
			<div class="container-web relative">
				<div class="container">
					<div class="row">
						<div class="breadcrumb-web">
							<ul class="clear-margin">
								<li class="animate-default title-hover-red"><a href="#">Home</a></li>
								<li class="animate-default title-hover-red"><a href="#">All Products</a></li>
								<li class="animate-default title-hover-red"><a href="#">Mobile & Tablet</a></li>
								<li class="animate-default title-hover-red"><a href="#">Apple iPhone X</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Breadcrumb -->
			<!-- Content Category -->
			<div class="relative container-web">
				<div class="container">
					<div class="row ">
						<!-- Sider Bar -->
						@include('layouts.partials._sliderBar')
						<!-- End Sider Bar Box -->
						<!-- Content Category -->
						<div class="col-md-9 relative clear-padding">
							<div class="col-sm-12 col-xs-12 col-md-1 relative overfollow-hidden clear-padding button-show-sidebar clearfix">
								<p onclick="showSideBar()"><span class="ti-filter"></span> Sidebar</p>
							</div>
							<!-- Product Content Detail -->
							<div class="top-product-detail relative ">
								<div class="row">
									<!-- Slide Product Detail -->
									<div class="col-md-7 relative col-sm-12 col-xs-12">
										<div id="owl-big-slide" class="relative sync-owl-big-image">
										  <div class="item center-vertical-image">
										    <img src="img/img_400x400/poulet_1.png" alt="Image Big Slide">
										  </div>
										  <div class="item center-vertical-image">
										    <img src="img/img_400x400/poulet_2.png" alt="Image Big Slide">
										  </div>
										  <div class="item center-vertical-image">
										    <img src="img/img_400x400/poulet_3.png" alt="Image Big Slide">
										  </div>
										  <div class="item center-vertical-image">
										    <img src="img/img_400x400/poulet_2.png" alt="Image Big Slide">
										  </div>
										</div>
										<div class="relative thumbnail-slide-detail">
											<div id="owl-thumbnail-slide" class="sync-owl-thumbnail-image" data-items="3,4,3,2">
											  <div class="item center-vertical-image">
											    <img src="img/img_400x400/poulet_1.png" alt="Image Thumbnail Slide">
											  </div>
											  <div class="item center-vertical-image">
											    <img src="img/img_400x400/poulet_2.png" alt="Image Thumbnail Slide">
											  </div>
											  <div class="item center-vertical-image">
											    <img src="img/img_400x400/poulet_3.png" alt="Image Thumbnail Slide">
											  </div>
											  <div class="item center-vertical-image">
											    <img src="img/img_400x400/poulet_2.png" alt="Image Thumbnail Slide">
											  </div>
											</div>
											<div class="relative nav-prev-detail btn-slide-detail"></div>
											<div class="relative nav-next-detail btn-slide-detail"></div>
										</div>
									</div>
									<!-- Info Top Product -->
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="name-ranking-product relative bottom-padding-15-default bottom-margin-15-default border no-border-r no-border-t no-border-l">
										<h1 class="name-product">{{ $product->name }}</h1>
											<div class=" ranking-color ">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star-half" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
											</div>
											<p class="clearfix price-product"><span class="price-old">$700.00</span> {{ $product->prix }} F CFA</p>
											<div class="product-code clearfix full-width">
												<p class="float-left relative">Item Code: #453217907</p>
												<p class="float-left clear-margin">Disponibilité: 
													@if ($product->status == 1)
													<span class="text-green">
														En Stock
													</span>
													@else
													<span style="color: red">
														Stock épuisé
													</span>
													@endif
													
												</span>
											</p>
											</div>
										</div>
										<div class="relative intro-product-detail bottom-margin-15-default bottom-padding-15-default border no-border-r no-border-t no-border-l">
										<p class="clear-margin">{{ $product->description }}</p>
										</div>
										{{-- action="{{ route('cart.add') }}" method="post" --}}
									<form action="{{ route('cart.add') }}" method="post" role="form" >
										{{ csrf_field() }}
										<div class="relative option-product-detail bottom-padding-15-default border no-border-r no-border-t no-border-l">
											<p class="bold clear-margin bottom-margin-15-default">Available Options:</p>
											<div class="relative option-product-1 bottom-margin-15-default">
												<p class="float-left">Color:</p>
												<ul class="check-box-custom list-color clearfix clear-margin">
													<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
					  								<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
					  								<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
					  								<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
					  								<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
					  								<li>
														<label>
															<input type="checkbox" >
					  										<span class="checkmark"></span>
					  									</label>
					  								</li>
												</ul>
											</div>
											<div class="relative option-product-2 clearfix">
												<div class="option-product-son float-left right-margin-default">
													<p class="float-left">Qty:</p>
													<input type="number" class="left-margin-15-default" min="01" step="1" max="10" value="1" name="num">
												<input type="hidden" name="product_id" value="{{ $product->id }}">
												</div>
												<div class="option-product-son float-left">
													<p class="float-left">Size:</p>
													<select class="">
														<option value="x">X</option>
														<option value="s">S</option>
														<option value="xl">XL</option>
														<option value="xxl">XXL</option>
													</select>
												</div>
											</div>
										</div>
										<div class="relative button-product-list clearfix full-width clear-margin">
											<ul class="clear-margin top-margin-default clearfix bottom-margin-default">
												@if ($product->status == 1)
												<li class="button-hover-red"><button class="animate-default" type="submit" id="addToCart">Ajouter au panier</button></li>
												@else
												<li class="button-hover-red"><button type="submit" id="addToCart" disabled class="animate-default">Ajouter au panier</button></li>
												@endif
												{{--  <li class="button-hover-red"><button class="animate-default">Ajouter au panier</button></li>  --}}
												<li><a href="#" class="animate-default"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
												<li><a href="#" class="animate-default"><i class="fa fa-signal" aria-hidden="true"></i></a></li>
												<li><a href="#" class="animate-default"><i class="fa fa-search" aria-hidden="true"></i></a></li>
											</ul>
											<div class="btn-print clearfix">
												<a href="javascript:;" class="right-margin-default animate-default title-hover-black" onclick="printWebsite()"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
												<a href="mailto:" class=" animate-default title-hover-black"><i class="fa fa-envelope" aria-hidden="true"></i> Send to a Friend</a>
											</div>
										</div>
									</form>
										
									</div>
								</div>
							</div>
							<div class="info-product-detail bottom-margin-default relative">
								<div class="row">
									<div class="col-md-12 relative overfollow-hidden">
										<ul class="title-tabs clearfix relative">
											<li onclick="changeTabsProductDetail(1)" class="title-tabs-product-detail title-tabs-1 border no-border-b active-title-tabs bold uppercase">Product Details</li>
											<li onclick="changeTabsProductDetail(2)" class="title-tabs-product-detail title-tabs-2 border no-border-b bold uppercase">Information</li>
											<li onclick="changeTabsProductDetail(3)" class="title-tabs-product-detail title-tabs-3 border no-border-b bold uppercase">Reviews</li>
										</ul>
										<div class="content-tabs-product-detail relative content-tab-1 border active-tabs-product-detail bottom-padding-default top-padding-default left-padding-default right-padding-default">
											<p>Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien. Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis pretium. Fusce egestas elit eget lorem. In auctor lobortis lacus.</p>
											<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna. Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>
											<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>
										</div>
										<div class="content-tabs-product-detail relative content-tab-2 border bottom-padding-default top-padding-default left-padding-default right-padding-default">
											<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from divs 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in div 1.10.32.</p>
											<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. divs 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
										</div>
										<div class="content-tabs-product-detail relative content-tab-3 border bottom-padding-default top-padding-default left-padding-default right-padding-default">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id eros in nulla dapibus tempor. Quisque tincidunt, turpis ut ornare placerat, diam quam faucibus turpis, nec gravida turpis neque eu augue. Integer et accumsan leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tincidunt condimentum tincidunt. Maecenas facilisis nibh eget neque ultrices, eu fringilla ipsum aliquam. Aenean auctor consequat ornare. Aliquam et magna vitae est tempus posuere. Etiam vel ex metus. Aliquam ut rhoncus nisi, lacinia rhoncus sem. Nam non felis turpis. Proin viverra turpis a odio interdum scelerisque.</p>

											<p>Nunc tincidunt magna ut orci vestibulum condimentum. Vivamus sagittis eros tellus, nec volutpat augue pretium ut. Donec commodo ante sit amet cursus ultricies. Donec mollis ligula ac augue ullamcorper malesuada. Integer eros enim, placerat ac erat eget, gravida commodo ligula. Nunc at sem in erat commodo interdum. Mauris vulputate est id mi rhoncus, id ultricies lectus posuere. Mauris aliquet, orci ac laoreet iaculis, velit ligula ultrices mauris, ac volutpat odio ante id erat. Sed sagittis tellus nunc, vitae semper magna euismod vel. Cras pretium feugiat augue, quis gravida neque scelerisque at. Mauris mauris nulla, faucibus ac viverra eu, pretium eget tortor. Nam vel lacus a tortor luctus auctor. Donec eu eleifend justo. In ut lobortis odio. Duis euismod dui enim, a faucibus massa fringilla sed.</p>

											<p>Vestibulum posuere et odio at tempor. Vestibulum eu sodales dolor. Etiam venenatis velit ac sodales vestibulum. Pellentesque tincidunt auctor tellus vitae blandit. Aenean vestibulum ut nisl at aliquet. Nullam viverra ultrices tellus ut molestie. Quisque tristique lobortis elit, eget blandit justo vestibulum vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed accumsan vel magna in egestas. Integer ultrices arcu tellus, nec ullamcorper libero commodo in.</p>

											<p>Morbi tristique sapien eu arcu rutrum, ac suscipit lacus ultricies. Etiam non arcu eros. Vestibulum orci ante, tincidunt id velit tristique, tristique rutrum purus. Ut odio sem, ornare id auctor ut, gravida a nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras odio est, vulputate ac imperdiet eu, sollicitudin vel sem. Integer mollis, tellus tincidunt ultricies pharetra, dolor eros mollis sapien, tristique posuere lacus erat eget dolor. Vivamus id vestibulum erat, nec aliquam sapien. Nunc gravida lacinia sagittis. Suspendisse facilisis metus nec sem sagittis, at rutrum nunc sagittis. In vestibulum sem augue, sed convallis eros vestibulum nec. Aenean eget quam ut eros suscipit ornare eget non diam.</p>

											<p>Phasellus sed accumsan dui. Pellentesque aliquam pharetra mattis. Duis feugiat auctor lorem. Aenean dapibus maximus justo vitae feugiat. Praesent dictum faucibus velit, sit amet feugiat justo luctus eget. Duis ac semper lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mi lacus, elementum a pellentesque et, posuere non felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat purus velit, quis sollicitudin ex dictum vitae. Maecenas efficitur erat vitae diam elementum semper eget non diam. Integer porta orci sit amet hendrerit efficitur.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-product-bottom relative">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12 relative bottom slide-related-product">
										<p class="bold title-slide-product-bottom">RELATED PRODUCTS</p>
										<div class="button-slide-related" id="btn-slide-1"></div>
										<div class="owl-theme owl-carousel" data-items="1,2,3">
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_31-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">Voyage Yoga Bag</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_32-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">MH02-Black09</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_33-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 relative slide-related-product">
										<p class="bold title-slide-product-bottom">YOU MIGHT ALSO LIKE</p>
										<div class="button-slide-related" id="btn-slide-2"></div>
										<div class="owl-theme owl-carousel" data-items="1,2,3">
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_14-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">Rival Field Messenger</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_23-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="full-width product-category relative">
													<div class="image-product  relative overfollow-hidden">
														<div class="center-vertical-image">
															<img src="img/product_home_24-min.png" alt="Product">
														</div>
														<a href="#"></a>
														<ul class="option-product animate-default">
															<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
															<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
															<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<h3 class="title-product animate-default title-hover-black clearfix full-width"><a href="#">Diam Special1</a></h3>
													<p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
													<div class="clearfix ranking-product-category ranking-color">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Product Content Category -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Sider Bar -->
			<!-- Content Modal -->
            @include('layouts.partials._quickview')
            <!-- End Content Modal -->
			<!-- Support -->
			<div class=" support-box full-width bg-red support_box_v2">
				<div class="container-web">
					<div class=" container">
						<div class="row">
							<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
								<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
								<p>free shipping</p>
								<p>on order over $500</p>
							</div>
							<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
								<img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
								<p>support</p>
								<p>life time support 24/7</p>
							</div>
							<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
								<img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
								<p>help partner</p>
								<p>help all aspects</p>
							</div>
							<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
								<img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
								<p>contact with us</p>
								<p>+07 (0) 7782 9137</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Box -->
		<!-- Footer Box -->
		<footer class="relative full-width">
			<div class=" top-footer full-width">
				<div class="clearfix container-web relative">
					<div class=" container">
						<div class="row">
							<div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
								<div class="clearfix text-subscribe">
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
								<p class="clear-margin">Copyright © 2018 by EngoCreative. All Rights Reserved.</p>
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
	</div>

	<!-- End Footer Box -->
	<script src="js/jquery-3.3.1.min.js" defer=""></script>
	<script src="js/bootstrap.min.js" defer=""></script>
	<script src="js/multirange.js" defer=""></script>
	<script src="js/slick.min.js" defer=""></script>
	<script src="js/owl.carousel.min.js" defer=""></script>
	<script src="js/scripts.js" defer=""></script>
	{{-- <script src="js/cart.js" defer=""></script> --}}
</body>
</html>