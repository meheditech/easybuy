
@extends('easybuy.layouts.master')

@section('title', 'EasyBuy | Checkout')

@section('banner')
        <div class="w3l_banner_nav_right">
            <div class="products-breadcrumb">
                <div class="container">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('easybuy') }}">Home</a><span>|</span></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- about -->
            <div class="privacy about">
                <h3>Chec<span>kout</span></h3>

                <div class="checkout-right">
                    <h4>Your shopping cart contains: <span style="color: red;">{{ Cart::count() }} Products</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product Name</th>

                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php ($i = 1)
                        @foreach($carts as $value)
                        <tr class="rem1">
                            <td class="invert">{{ $i++ }}</td>
                            <td class="invert">{{ $value->name }}</td>

                            <td class="invert">৳ {{ $value->price }}</td>
                            <td class="invert">
                                <div class="rem">
                                    <a href="{{ url('cartremove', $value->rowId) }}"><i class="close1"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Continue to basket</h4>
                        <ul>
                            @foreach($carts as $value)
                                <li>{{ $value->name }} <i>-</i> <span>৳ {{ $value->price }}</span></li>
                            @endforeach
                            {{--<li>Total Service Charges <i>-</i> <span>৳ 15.00</span></li>--}}
                            <li>Total (Vat +5%) <i>-</i> <span>৳ {{ Cart::total() }}</span></li>
                                <li>
                                    <a href="{{ route('easybuy') }}" class="btn-sm btn-warning">Continue To Shipping</a>
                                </li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form_agile">
                        <h4>Add a new Details</h4>
                        {!! Form::open(['route'=>'checkout', 'files'=>true, 'class'=>'form-horizontal']) !!}
                            <div>
                                <label for="name">Name*: </label>
                                {{ Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Full Name', 'required']) }}
                            </div>
                            <div>
                                <label for="email">Email*: </label>
                                {{ Form::email('email','',['class'=>'form-control', 'placeholder'=>'Email', 'required']) }}
                            </div>
                            <div>
                                <label for="number">Phone Number*: </label>
                                {{ Form::number('mobile','', ['class'=>'form-control', 'placeholder'=>'Phone Number', 'required']) }}
                            </div>
                            <div>
                                <label for="address">Address*: </label>
                                {{ Form::textarea('address','', ['class'=>'form-control','rows'=>'3', 'placeholder'=>'Address', 'required']) }}
                            </div>
                            <div>
                                <label for="city">City: </label>
                                {{ Form::text('city','',['class'=>'form-control', 'placeholder'=>'City']) }}
                            </div>
                        <div>
                            {{ Form::hidden('qty', Cart::count()) }}
                            {{ Form::hidden('price', Cart::total()) }}
                        </div>
                            <div style="margin: 15px 0px;">
                                <button type="submit" class="btn btn-danger btn-lg">Checkout</button>
                            </div>
                        {!! Form::open() !!}
                        <div class="checkout-right-basket">
                            <a href="#">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        </div>
                    </div>

                    <div class="clearfix"> </div>

                </div>

            </div>
            <!-- //about -->
        </div>
        <div class="clearfix"></div>
@endsection