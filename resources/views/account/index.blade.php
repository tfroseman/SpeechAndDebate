@extends('layout')

@section('nav')
    <li class="active"><a href="#">My Account  <span class="sr-only">(current)</span></a></li>
    <li><a href="/account/{{$user->id}}/school">School Account</a></li>
    <li><a href="/account/{{$user->id}}/students">Students</a></li>
@stop

@section('loginout')
    <a href="/logout">Logout</a>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form>
                <div class="form-group">
                    <label for="accountName">Name</label>
                    <input type="email" class="form-control" id="accountName" placeholder="Thomas Roseman" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="accountEmail">Email address</label>
                    <input type="email" class="form-control" id="accountEmail" placeholder="Email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="accountPasword">Password</label>
                    <input type="password" class="form-control" id="accountPaswordOld" placeholder="Current Password">
                    <input type="password" class="form-control" id="accountPaswordNew" placeholder="New Password">
                    <input type="password" class="form-control" id="accountPaswordNewCheck" placeholder="New Password">
                </div>
                <button type="submit" class="btn btn-default" style="width: 100%; border-radius: 0px">Submit</button>
            </form>
        </div>
    </div>
@stop