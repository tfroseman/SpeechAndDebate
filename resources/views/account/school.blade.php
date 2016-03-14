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
                </div>

                <div class="">
                    <h3>Affiliated Accounts</h3>
                    <div class="row">
                        <div class="col-lg-3">
                            <h5>Coaches</h5>
                            <ul>
                                {{--@foreach($coaches as $coach)--}}
                                    <li class="non_style_list">$coach</li>
                                {{--@endforeach--}}
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h5>Judges</h5>
                            <ul>
                                {{--@foreach($judges as $judge)--}}
                                    <li class="non_style_list">$judge</li>
                                {{--@endforeach--}}
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="form-group">
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