					<!-- Sider Bar -->
					<div class="col-md-3 relative right-padding-default clear-padding" id="slide-bar-category">
						<div class="col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
							<p class="title-siderbar bold">CATEGORIES</p>
							<ul class="clear-margin list-siderbar">
								@foreach ($categories as $category)
									<li><a href="{{ route('category', ['name' => $category->name]) }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-sm-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
							<p class="title-siderbar bold">BRANDS</p>
							<ul class="check-box-custom clear-margin clear-margin">
								<li>
									<label>Apple  (465)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Asus  (344)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Audio-Technica  (136)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Belkin  (121)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>BlueStone  (258)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Brother  (119)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Canon  (205)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>China OEM  (113)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>Comet  (330)
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
							</ul>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 relative border bottom-margin-default sider-bar-category">
							<div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
								<p class="title-siderbar bold">price</p>
								<div class="range-slider">
									<input value="50" min="0" max="1000" class="multi-range" type="range">						
									<p class="text-range">Range: <span class="number-range"></span></p>
								</div>
							</div>
							<div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
								<p class="title-siderbar bold top-padding-default">color</p>
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
							<div class="relative">
								<p class="title-siderbar bold top-padding-default">size</p>
								<ul class="check-box-custom clear-margin">
								<li>
									<label>S
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>M
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>L
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XXL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
								<li>
									<label>XXXL
										<input type="checkbox" >
	  									<span class="checkmark"></span>
	  								</label>
								</li>
							</ul>
							</div>
						</div>
						<div class="bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix">
							<div class="overfollow-hidden banners-effect5 relative center-vertical-image">
								<img src="img/banner_siderbar-min.png" alt="Siderbar" />
								<a href="#"></a>
							</div>
						</div>
					</div>
					<!-- End Sider Bar Box -->