@extends('easybuy.layouts.master')

@section('title', 'EasyBuy | Cart List')

@section('banner')
        <div class="products-breadcrumb" style="margin: 0px 5px">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('easybuy') }}">Home</a><span>|</span></li>
                <li>Cart List</li>
            </ul>
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1" style="padding: 0px 25px;">
            <div style="margin-top: 15px">
                <h3><i class="fa fa-shopping-cart"></i> Shopping Cart</h3>
                <a href="{{ url('checkoutlist') }}" class="btn btn-success pull-right" style="margin: 0px 5px 15px 0px;">PROCEED TO CHECKOUT</a>
            </div>
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @php($i = 1)
                @foreach($carts as $cart)
                    <tbody>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $cart->name }}</td>
                        <td>৳ {{ $cart->price }}</td>
                        <td>{{ $cart->qty }}</td>
                        <td>৳ {{ $cart->subtotal }}</td>
                        <td class="text-center">
                            <a href="{{ url('cartremove', $cart->rowId) }}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">Total Qty</td>
                        <td colspan="">{{ Cart::count() }}</td>
                        <td></td>
                    </tr>
                    <tr>
                       <td colspan="4">Grand Total (Vat +5%)</td>
                       <td colspan="">৳ {{ Cart::total() }}</td>
                       <td></td>
                    </tr>
                    </tbody>
            </table>

            <div class="checkout text-center">
                <a href="{{ url('checkoutlist') }}" class="btn btn-danger btn-lg"><i class="fa fa-shopping-cart"></i> PROCEED TO CHECKOUT</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
@endsection