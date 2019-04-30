@extends('layouts.app')

@section('content')
    <div class="main-bg">
        <!-- title -->
        <h1>EasyBuy</h1>
        <!-- //title -->
        <div class="sub-main-w3">
            <div class="image-style">

            </div>
            <!-- vertical tabs -->
            <div class="vertical-tab">
                <div id="section1" class="section-w3ls">
                    <input type="radio" name="sections" id="option1" checked>
                    <label for="option1" class="icon-left-w3pvt"><a href="{{ route('login') }}" ><span class="fa fa-lock" aria-hidden="true"></span>Forget Password?</a></label>
                    <article>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <h3 class="legend last">Reset Password</h3>
                            <p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
                            <p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="{{ route('login') }}">retrieve an existing
                                    account.</a></p>
                            <div class="input">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div>
                                <button type="submit" class="btn submit last-btn">Reset</button>
                            </div>
                            <a href="{{ route('login') }}" class="pull-right">Back?</a>
                        </form>
                    </article>
                </div>
                <div id="section3" class="section-w3ls">
                    <input type="radio" name="sections" id="">
                    <label for="" class="icon-left-w3pvt"><a href="{{ route('login') }}" ><span class="fa fa-user-circle" aria-hidden="true"></span>Login</a></label>
                </div>
                <div id="section2" class="section-w3ls">
                    <label for="" class="icon-left-w3pvt"><a href="{{ route('register') }}"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</a></label>
                </div>
            </div>
            <!-- //vertical tabs -->
            <div class="clear"></div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <h2>&copy; 2019 EasyBuy. All rights reserved | Design by
                <a href="http://www.fb.com/dezingmehedi1" target="_blank"><b>Mehedi Hasan</b></a>
            </h2>
        </div>
        <!-- //copyright -->
    </div>
@endsection
