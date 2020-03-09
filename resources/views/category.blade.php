@extends('layouts.indexLayout')

@section('content')
	<!-- Content Box -->
	<div class="relative full-width">
		<!-- Breadcrumb -->
		<div class="container-web relative">
			<div class="container">
				<div class="row">
					<div class="breadcrumb-web">
						<ul class="clear-margin">
						<li class="animate-default title-hover-red"><a href="{{ route('index') }}">Acceuil</a></li>
							<li class="animate-default title-hover-red"><a href="#">Tous les produits</a></li>
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
					@include('layouts.partials._sliderBar')
					<!-- Content Category -->
					<div class="col-md-9 relative clear-padding">
						<div class="col-sm-12 col-xs-12 relative overfollow-hidden clear-padding button-show-sidebar">
							<p onclick="showSideBar()"><span class="ti-filter"></span> Sidebar</p>
						</div>
						<div class="banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width">
							<img src="img/img_875x385/viande_1.png" alt=""/>
							<a href="#"></a>
						</div>
						<div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-xs-4">
								<p class="title-category-page clear-margin">{{ $name }}</p>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative">
									<p class=" float-left">Showing 1–20 of {{ $products->count() }} résultats</p>
									<a href="#" class=" float-left active-view-bar"><span class="icon-bar-category border ti-layout-grid3"></span></a>
									<a href="#" class=" float-left"><span class="icon-bar-category border ti-layout-list-thumb"></span></a>
								</div>
							</div>
						</div>
						<!-- Product Content Category -->
						<div class="row">
							@foreach ($products as $product)
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
									<img src="img/img_270x270/{{ $product->photo }}" alt="Product">
									</div>
									<a href="#"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
									<li class="relative"><a href="javascript:;" class="show-modal" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-photo="{{ $product->photo }}" data-prix="{{ $product->prix }}" data-toggle="modal" data-target="#quickview"><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							<h3 class="title-product clearfix full-width title-hover-black"><a href="{{ route('product', ['cat' => $name, 'num' => $product->id,'prod' => str_replace(" ", "-", $product->name)]) }}">{{ $product->name }}</a></h3>
								<p class="clearfix price-product"><span class="price-old">$700</span> {{ $product->prix }} F CFA</p>
								<div class="clearfix ranking-product-category ranking-color">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">
							<div class="pagging relative">
								<ul>
									<li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> First</a></li>
									<li class="active-pagging"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="dots-pagging">. . .</li>
									<li><a href="#">102</a></li>
									<li><a href="#">Last <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
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
	
@endsection