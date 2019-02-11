@extends('layouts.master')

@section('title', 'Shopping')
@section('content')
    <div class="col-sm-8 blog-content">
        <div class="blog-posts">
            @if(session()->has('msg_success'))
                <div class="alert alert-success">
                    {{ session()->get('msg_success') }}
                </div>
            @endif
            <div class="isotope row">
                @if(Cart::count() > 0)
                    <h2><span class="text-danger">{{ Cart::count() }}</span> Product(s) in cart</h2>
                @else
                    <h2>No item in this cart</h2>
                    <a class="btn-aqua btn" href="{{ route('home.index') }}">Continue shopping...</a>
                @endif
            </div>
            <!-- /.isotope -->
            {{--Carts--}}

            <div class="sidebox widget">
                <h3 class="widget-title">Popular Posts</h3>
                <ul class="post-list">
                    @foreach(Cart::content() as $item)
                    <li>
                        <div class="icon-overlay"> <a href="{{ route('shopping.show', $item->model->slug) }}"><img src="{{ asset('hot/products/'.$item->model->slug . '.jpg') }}" alt="" /> </a> </div>
                        <div class="meta" style="padding-left: 100px; width: 300px; display: inline-block">
                            <h5><a href="{{ route('shopping.show', $item->model->slug) }}">{{ $item->model->name }}</a></h5>
                            <em><span class="date">{{ $item->model->details }}</span></em>
                        </div>
                        <div class="meta" style="display: inline-block; width: 300px; text-align: right">
                            <h5>{{ $item->model->presentPrice() }}</h5>
                            {{--<em><span class="date">3th Oct 2012</span> <span class="comments"><a href="#"><i class="icon-chat-1"></i> 8</a></span></em>--}}
                            <em><span class="date">{{ $item->model->nhan2($item->model->price,$item->qty) }}</span> <span class="comments"><i class="icon-chat-1"></i> qty {{ $item->qty }}</span></em>

                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" value="{{ $item->model->slug }}" name="xxx">
                                <button type="submit" class="btn-sm btn-red btn-warning">Remove</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!-- /.post-list -->
            </div>

        </div>
        <!-- /.blog-posts -->


    </div>
@stop

@section('__scripts')
    <script>
        $(function () {
            $.ajax({
                type: "DELETE",
                url: "{{ route('cart.destroy', 's') }}"
            });
        });
    </script>
@stop