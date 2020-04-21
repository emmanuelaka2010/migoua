<div class="modal fade bs-example-modal-lg" id="quickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content clearfix">
            <div class="modal-body clearfix">
                <div class=" relative clearfix">
                    <button type="button" class="close-modal animate-default" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ti-close"></span>
                    </button>
                    <div class="col-md-5 slide-modal clear-padding-left col-sm-12 col-xs-12">
                        <div class="relative slide-modal-big full-width">
                            <div id="owl-big-slide-quickview" class="owl-carousel owl-theme relative sync-owl-big-image">
                              <div class="item center-vertical-image">
                                <img src="img/slide_quickview_4-min.png" alt="Product Image Big Slide">
                              </div>
                              <div class="item center-vertical-image">
                                <img src="img/slide_quickview_1-min.png" alt="Product Image Big Slide">
                              </div>
                              <div class="item center-vertical-image">
                                <img src="img/slide_quickview_2-min.png" alt="Product Image Big Slide">
                              </div>
                              <div class="item center-vertical-image">
                                <img src="img/slide_quickview_3-min.png" alt="Product Image Big Slide">
                              </div>
                            </div>
                        </div>
                        <div class="relative thumbnail-slide-detail full-width bottom-margin-default">
                            <div id="owl-thumbnail-slide-quickview" class="owl-carousel owl-theme sync-owl-thumbnail-image" data-items="4,3,2,2">
                              <div class="item">
                                <img src="img/slide_quickview_4-min.png" alt="Product Thumbnail Slide">
                              </div>
                              <div class="item">
                                <img src="img/slide_quickview_1-min.png" alt="Product Thumbnail Slide">
                              </div>
                              <div class="item">
                                <img src="img/slide_quickview_2-min.png" alt="Product Thumbnail Slide">
                              </div>
                              <div class="item">
                                <img src="img/slide_quickview_3-min.png" alt="Product Thumbnail Slide">
                              </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="top-title-modal border no-border-l no-border-r no-border-t bottom-padding-15-default">
                            <p class="title-product-modal">{{ $fm->name }}</p>
                            <div class="box-rank-modal">
                                <div class="clearfix ranking-product-modal ranking-color">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p class="count-review-modal">(4 reviews)</p>
                            </div>
                        </div>
                        <p class="price-modal top-margin-15-default bottom-margin-15-default"><span class="price-old-modal">$700.00</span> <span class="text-red left-margin-15-default">{{ $fm->prix }} F CFA</span></p>
                    <p class="intro-product-modal">{{ $fm->description }}ith a large 14.73 cm (5.8) Super Retina screen and a durable front-and-back glass, this smartphone is designed to impress. What’s more, you can charge this iPhone wirelessly.</p>
                        <div class="option-button-modal relative bottom-margin-default top-margin-default">
                        <form action="{{ route('cart.add') }}" method="post">
                            <div class="relative box-num-product-modal ">
                                <input type="text" name="num-product" id="num-modal" value="1" class=""/>
                                <span class="ti-plus animate-default" onclick="plusBtnInput('#num-modal')"></span>
                                <span class="ti-minus animate-default" onclick="minusBtnInput('#num-modal')"></span>
                            </div>
                            <button type="submit" class="add-cart-modal left-margin-15-default animate-default">Ajouter au panier</a>
                        </form>
                            <a href="#" class="add-favor-modal left-margin-15-default animate-default"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="relative category-product-modal">
                            <p>SKU : <span class="text-red">671272</span></p>
                            <p>Category : <a href="#" class="text-red">Mobile & Tablet</a></p>
                            <p>Tags : <span class="text-red"><a href="#" class="text-red">iPhone</a>, <a href="#" class="text-red">Apple</a>, <a href="#" class="text-red">iPhone X</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>