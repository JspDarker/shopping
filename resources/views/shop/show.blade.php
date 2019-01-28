@extends('layouts.master')

@section('title', 'Shop{product}')

@section('content')
    <div class="col-sm-8 blog-content">
        <div class="blog-posts">
            <div class="isotope row">
                    <div class="col-md-6 col-sm-12 grid-view-post">
                        <div class="post">
                            <figure class="main"><a href="blog-post.html"><img src="{{ url('hot/products/'.$product->slug.'.jpg') }}" alt="{{ $product->name }}" title="{{ $product->name }}" /></a></figure>
                            <div class="box text-center">
                                <div class="category cat12"><span><a href="#">Add to Cart</a></span></div>
                                <h4 class="post-title"><a href="blog-post.html">{{ $product->name }}</a></h4>
                                <h5 style="color: red">{{ $product->presentPrice() }}</h5>
                                <div class="meta"><span class="date">{{ (new DateTime($product->created_at))->format('j F Y') }}</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
                                <p>{{ $product->details }}</p>
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /column -->
            </div>
            <!-- /.isotope -->

        </div>
        <!-- /.blog-posts -->
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
        <!-- /.pagination -->

    </div>
@stop

