@extends('frontend.master')
@section('title','Detail')
@section('main')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="{{asset('')}}">Home</a>
                            <a href="{{asset('')}}">@foreach($catelist as $cate) @if($cate->cate_id == $item->prod_cate) {{$cate->cate_name}} @endif @endforeach</a>
                            <a href="{{asset('')}}">{{$item->prod_name}}</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="">
                                    </div>
                                    
                                    {{-- <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div> --}}
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$item->prod_name}}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{number_format($item->prod_price,0,',','.')}} VND</ins> <del></del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <a href="{{asset('cart/add/'.$item->prod_id)}}" class="add_to_cart_button" type="submit">Add to cart</a>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p><b>Hãng:</b>@foreach($catelist as $cate) @if($cate->cate_id == $item->prod_cate) <a href="">{{$cate->cate_name}}</a> @endif @endforeach</p>
                                        <p><b>Phụ kiện:</b> {{$item->prod_accessories}} </p>
                                        <p><b>Bảo hành:</b> {{$item->prod_warranty}} </p>
                                        <p><b>Khuyến mãi:</b> {{$item->prod_promotion}} </p>
                                        <p><b>Tình trạng:</b> {{$item->prod_condition}} </p>
                                        <p><b>Trạng thái:</b> @if($item->prod_status == 1) Còn hàng @else Hết hàng @endif</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>{!!$item->prod_description!!}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                @foreach($featured as $item)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img height="230px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">{{$item->prod_name}}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>{{number_format($item->prod_price,0,',','.')}} VND</ins> <del></del>
                                    </div> 
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@stop