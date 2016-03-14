@extends('layout')

@section('nav')
    {{-- No need for a menu when an account does not exist --}}
@stop

@section('loginout')
    {{-- Not signed in no need to logout --}}
@stop

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form method="POST" action="/account">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="accountName">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="John Dow">
                </div>
                <div class="form-group">
                    <label for="accountEmail">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="accountPassword">Password</label>
                    <input type="password" class="form-control" id="accountPassword" placeholder="Password">
                    <input type="password" class="form-control" id="accountPasswordAgain" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="school">School Request</label>
                    <input  type="text" class="form-control" id="school_id" placeholder="School Id">
                </div>
                <button type="submit" class="col-lg-offset-3 btn btn-primary" style="height: 5em; width: 50%; border-radius: 0px">Submit</button>
            </form>
        </div>
    </div>
@stop