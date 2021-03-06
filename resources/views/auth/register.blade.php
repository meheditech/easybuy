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
                <label for="option1" class="icon-left-w3pvt"><a href="{{ route('register') }}">
                        <span class="fa fa-pencil-square" aria-hidden="true"></span>Register</a></label>
                <article>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h3 class="legend">Register Here</h3>
                        <div class="input">
                            <span class="fa fa-user-o" aria-hidden="true"></span>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}" required placeholder="User Name">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required placeholder="User Email">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input type="password" name="password_confirmation" required placeholder="Password Confirm">
                        </div>
                        <button type="submit" class="btn submit">{{ __('Register') }}</button>
                    </form>
                </article>
            </div>
            <div id="section2" class="section-w3ls">
                <label class="icon-left-w3pvt"><a href="{{ route('login') }}" ><span class="fa fa-user-circle" aria-hidden="true"></span>Login</a></label>
            </div>
            <div id="section3" class="section-w3ls">
                <label for="" class="icon-left-w3pvt"><a href="{{ route('password.update') }}" ><span class="fa fa-lock" aria-hidden="true"></span>Forget Password?</a></label>
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
