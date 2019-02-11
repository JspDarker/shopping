@extends('layouts.master')

@section('title', 'Shopping')
@section('content')
    <div class="col-sm-8 blog-content">
        <div class="blog-posts">
            @if(session()->has('msg_success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('msg_success') }}
                </div>
            @endif
            <div class="isotope row">
                @if(Cart::count() > 0)
                    <h2><span class="text-danger total-products">{{ Cart::count() }}</span> Product(s) in cart</h2>
                @else
                    <h2>No item in this cart</h2>
                    <a class="btn-aqua btn" href="{{ route('home.index') }}">Continue shopping...</a>
                @endif
            </div>
            <!-- /.isotope -->
            {{--Carts--}}

            <div class="sidebox widget">
                <ul class="post-list">
                    @foreach(Cart::content() as $item)
                    <li class="product-row">
                        <div class="icon-overlay"> <a href="{{ route('shopping.show', $item->model->slug) }}"><img src="{{ asset('hot/products/'.$item->model->slug . '.jpg') }}" alt="" /> </a> </div>
                        <div class="meta" style="padding-left: 100px; width: 300px; display: inline-block">
                            <h5><a href="{{ route('shopping.show', $item->model->slug) }}">{{ $item->model->name }}</a></h5>
                            <em><span class="date">{{ $item->model->details }}</span></em>
                        </div>
                        <div class="meta" style="display: inline-block; width: 300px; text-align: right">
                            <h5>{{ $item->model->presentPrice() }}</h5>
                            {{--<em><span class="date">3th Oct 2012</span> <span class="comments"><a href="#"><i class="icon-chat-1"></i> 8</a></span></em>--}}
                            <em><span class="date">{{ $item->model->nhan2($item->model->price,$item->qty) }}</span> <span class="comments"><i class="icon-chat-1"></i> qty {{ $item->qty }}</span></em>

                            <form class="cart-delete" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                {{--<input type="hidden" value="{{ $item->model->slug }}" name="product_{{ $item->model->slug }}">--}}
                                <button itemid="{{ $item->rowId }}" type="submit" class="btn-sm btn-red btn-warning remove-btn">Remove</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!-- /.post-list -->
            </div>
                <a class="btn-aqua btn display-message-default" style="display: none" href="{{ route('home.index') }}">Continue shopping...</a>
        </div>
        <!-- /.blog-posts -->


    </div>
@stop

@section('__scripts')
    <script>
        $(function () {
            let btnRemoveItem = $('.remove-btn');
            btnRemoveItem.on('click', function (e) {
                e.preventDefault();

                // data config
                let btnRemove = $(this);
                let product = btnRemove.attr('itemid');

                // bind-data for call Ajax
                let data_request = [];
                data_request['product'] = product;
                data_request['data_this'] = btnRemove;
                data_request['data_el'] = '.product-row';

                // call ajax
                callAjaxDeleteItem(data_request);
            });
        });

        function callAjaxDeleteItem(data_request = []) {
            laravelAjaxSetup();
            $.ajax({
                type: "DELETE",
                url: "cart/" + data_request['product'],
                dataType: 'json',
                success: function (data) {
                    if (data.status_code === 200){
                        hideItem(data_request['data_this'],data_request['data_el']);

                        // update qty all
                        if (data.count > 0)
                            $('.total-products').html(data.count);
                        else {
                            $('.total-products').html('');
                            $('.display-message-default').show();
                        }
                        // update total price
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }

        function hideItem(this_row, obj_class) {
            this_row.closest(obj_class).hide(1000);
        }

        function laravelAjaxSetup() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    </script>
@stop