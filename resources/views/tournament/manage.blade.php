@extends('layout')

@section('css')
    <link rel="stylesheet" media="screen" href="http://handsontable.com/dist/handsontable.full.css">
    <script src="http://handsontable.com/dist/handsontable.full.js"></script>
@stop
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
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Manage</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">OO</a>
                </li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DI</a>
                </li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">HI</a>
                </li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DUO</a>
                </li>

            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title">Tournament Tools</h2>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-default fullwidth">Generate School Codes</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-default fullwidth">Print Codes</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-default fullwidth">Print Standings</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-default fullwidth">Email Standings</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-default fullwidth">Update Events</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="panel-title">Round Tools</h2>
                                </div>
                                <div class="panel-body">
                                    <button class="btn btn-default fullwidth">Make Final Round</button>
                                    <button class="btn btn-default fullwidth">Make Next Round</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="" id="scorepanel">

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding: 1em">
                                <button class="btn btn-primary" id="saveButton">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">...</div>
            </div>
        </div>
    </div>

    <script>

        $('#saveButton').click(
                function () {
                    console.log(hot.getData());
                }
        );


        var data = [
            {ID: 'af1', round1: 2, round2: 1, round3: 1, round4: 3},
            {ID: 'fd1', round1: 1, round2: 2, round3: 2, round4: 2},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'af2', round1: 4, round2: 4, round3: 4, round4: 4},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1}
        ];

        var container = document.getElementById('scorepanel');


        var hot = new Handsontable(container, {
            data: data,
            colHeaders: ['ID', 'Round1', 'Round 2', 'Round 3', 'Final'],
            rowHeaders: true,
            contextMenu: true,
            columns: [
                {
                    data: 'ID',
                    readOnly: true
                },
                {
                    data: 'round1',
                    type: 'numeric'
                },
                {
                    data: 'round2',
                    type: 'numeric'
                },
                {
                    data: 'round3',
                    type: 'numeric'
                },
                {
                    data: 'round4',
                    type: 'numeric'
                }
            ]
        });
    </script>

@stop

@section('javascript')
@stop