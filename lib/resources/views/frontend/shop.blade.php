@extends('frontend.master')
@section('title',$cateshop->cate_name)
@section('main')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$cateshop->cate_name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-f-image">
                            <img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="">
                            <div class="product-hover">
                                <a href="{{asset('cart/add/'.$item->prod_id)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                            </div>
                        </div>

                        <h2><a href="">{{$item->prod_name}}</a></h2>

                        <div class="product-carousel-price">
                            <ins>{{number_format($item->prod_price,0,',','.')}} VND</ins> <del></del>
                        </div> 
                    </div>
                </div>
                    
                {{-- <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-upper">
                            <img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="" class="thumbnail">
                        </div>
                        <h2><a href="">{{$item->prod_name}}</a></h2>
                        <div class="product-carousel-price">
                            <ins>$899.00</ins> <del>$999.00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div> --}}
                @endforeach
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          {{-- <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul> --}}
                          {{$items->links()}}
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop