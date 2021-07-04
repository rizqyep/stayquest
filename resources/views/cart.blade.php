@extends('layouts.app')

@section('title')
    Cart
@endsection

@section('content')

    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Your cart</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box_cart">
                            <table class="table table-striped cart-list">
                                <thead>
                                    <tr>
                                        <th>
                                            Item
                                        </th>

                                        <th>
                                            Price
                                        </th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr>
                                            <td>
                                                <div class="thumb_cart">
                                                    <img src="/storage/{{ $cart->package->image }}" alt="Image">
                                                </div>
                                                <span class="item_cart">{{ $cart->package->name }}</span>
                                            </td>
                                            <td>
                                                <strong>{{ $cart->package->idrPrice() }}</strong>
                                            </td>
                                            <td>
                                                {{ $cart->start_date }}
                                            </td>
                                            <td>
                                                {{ $cart->end_date }}
                                            </td>

                                            <td class="options" style="width:5%; text-align:center;">
                                                <a href="#"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- /cart-options -->
                        </div>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail">
                            <div id="total_cart">
                                Total <span class="float-right">

                                    IDR {{ number_format($totalInCart, 0, ',', '.') }}</span>
                            </div>
                            <form action="{{ url('/checkout') }}" method="post">
                                <button type="submit" class="btn_1 full-width purchase">Checkout</button>
                            </form>
                        </div>
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection
