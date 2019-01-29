@extends('layouts.master')

@section('title', 'Shop')

@section('content')
    <div class="col-sm-8 blog-content">
        <div class="blog-posts">
            <div class="isotope row">
                @foreach($products as $product)
                    <div class="col-md-6 col-sm-12 grid-view-post">
                        <div class="post">
                            <figure class="main"><a href="{{ route('shopping.show', $product->slug) }}"><img src="{{ url('hot/products/'.$product->slug.'.jpg') }}" alt="{{ $product->name }}" title="{{ $product->name }}" /></a></figure>
                            <div class="box text-center">
                                <div class="category cat12">
                                        <form action="{{ route('cart.store') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <button type="submit" class="btn btn-orange">Add to Cart</button>
                                        </form>
                                </div>
                                <h4 class="post-title"><a href="blog-post.html">{{ $product->name }}</a></h4>
                                <h5 style="color: red">{{ $product->presentPrice() }}</h5>
                                <div class="meta"><span class="date">{{ (new DateTime($product->created_at))->format('j F Y') }}</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
                                <p>{{ $product->details }}</p>
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /column -->
                @endforeach
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

