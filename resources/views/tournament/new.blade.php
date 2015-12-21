@extends('layout')

@section('nav')
    <li><a href="/account/{{$school_id}}/">My Account <span class="sr-only">(current)</span></a></li>
    <li><a href="/account/{{$school_id}}/school">School Account</a></li>
    <li><a href="/account/{{$school_id}}/students">Students</a></li>
    <li class="dropdown">
        <a href="/account/{{ $school_id }}/tournament/manage/" class="dropdown-toggle" data-toggle="dropdown"
           role="button" aria-haspopup="true" aria-expanded="false">Tournament <span class="caret"></span></a>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Categories Hosted</h3>
                </div>
                <div class="panel-body">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Congressional Debate (House and Senate)
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Extemporaneous Debate
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Lincoln-Douglas Debate
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Policy Debate
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Public Forum Debate
                        </label>


                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Dramatic Interpretation
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Duo Interpretation
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Humorous Interpretation
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Impromptu (Middle School)
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Informative Speaking
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">International Extemporaneous Speaking
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Mixed Extemporaneous Speaking (Middle School)
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Original Oratory
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Poetry (Middle School)
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Program Oral Interpretation
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Prose (Middle School)
                        </label>

                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Storytelling (Middle School)
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">United States Extemporaneous
                            Speaking
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
@stop