@extends('layout')

@section('nav')

@stop

@section('loginout')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <form method="POST" action="{!!url('auth/login') !!}">
                {!!csrf_field()!!}

                <div>
                    <label>
                        Email
                        <input type="email" name="email" value="{{old('email')}}">
                    </label>
                </div>

                <div>
                    <label for="password">
                        Password
                        <input type="password" name="password" id="password">
                    </label>
                </div>

                <div>
                    <label>
                        <input type="checkbox" name="remember">
                    </label> Remember Me
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@stop