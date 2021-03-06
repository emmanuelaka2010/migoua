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
						<li class="animate-default title-hover-red"><a href="{{ route('index') }}">Accueil</a></li>
							<li class="animate-default title-hover-red"><a href="#">Recherche</a></li>
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
						<!-- Product Content Category -->
						<div class="relative clearfix">
							<div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-4">
										<p class="title-category-page clear-margin">Résultats de recherche pour '{{ request()->input('s') }}'</p>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative">
										<p class=" float-left">Showing 1–20 of {{ $products->count() }} résultats</p>
										<a href="#" class=" float-left active-view-bar"><span class="icon-bar-category border ti-layout-grid3"></span></a>
										<a href="#" class=" float-left"><span class="icon-bar-category border ti-layout-list-thumb"></span></a>
									</div>
								</div>
							</div>
							@foreach ($products as $product)
							<div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
								<div class="image-product relative overfollow-hidden">
									<div class="center-vertical-image">
									<img src="img/img_270x270/{{ $product->p_photo }}" alt="Product">
									</div>
									<a href="{{ route('product', ['cat' => $product->c_name, 'num' => $product->p_id, 'prod' => str_replace(" ", "-", $product->p_name)]) }}"></a>
									<ul class="option-product animate-default">
										<li class="relative"><a href="{{ route('product', ['cat' => $product->c_name, 'num' => $product->p_id, 'prod' => str_replace(" ", "-", $product->p_name)]) }}"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
										<li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
										<li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							<h3 class="title-product clearfix full-width title-hover-black"><a href="{{ route('product', ['cat' => $product->c_name, 'num' => $product->p_id, 'prod' => str_replace(" ", "-", $product->p_name)]) }}">{{ $product->p_name }}</a></h3>
							<p class="clearfix price-product"><span class="price-old">$700</span> {{ $product->p_prix }} F CFA</p>
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
	</div>
	<!-- End Content Box -->
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
	<!-- End Content Box -->
	
@endsection