@extends('layout')

@section('nav')
    <li><a href="/account/{{$user->id}}">My Account </a></li>
    <li class="active"><a href="#">School Account <span class="sr-only">(current)</span></a></li>
    <li><a href="/account/{{$user->id}}/students">Students</a></li>
@stop

@section('loginout')
    <a href="/logout">Logout</a>
@stop

@section('content')
    {{$user}}
    <br>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form>
                <div class="form-group">
                    <label for="schoolName">Name</label>
                    <input type="text" class="form-control" id="schoolName" placeholder="Mercer Area Jr Sr High School"
                           value="Mercer Area Jr Sr High School">


                    @foreach($emails as $email)

                        <label for="schoolName">Emails</label>
                        <input type="text" class="form-control" id="email[]" placeholder="someone@someplace.com"
                               value="{{$email->email}}">
                    @endforeach
                </div>
            </form>
        </div>
    </div>
@stop