@extends('layout')

@section('nav')
    <li ><a href="/account/{{$school_id}}/">My Account  <span class="sr-only">(current)</span></a></li>
    <li><a href="/account/{{$school_id}}/school">School Account</a></li>
    <li><a href="/account/{{$school_id}}/students">Students</a></li>
    <li class="dropdown">
        <a href="/account/{{ $school_id }}/tournament/manage/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tournament <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/account/{{ $school_id }}/tournament/manage/">Manage</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/account/{{ $school_id }}/tournament/new/">New</a></li>
        </ul>
    </li>
@stop

@section('loginout')
    <a href="/logout">Logout</a>
@stop

@section('content')


@stop