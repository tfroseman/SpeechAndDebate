@extends('layout')

@section('css')
    <link rel="stylesheet" media="screen" href="http://handsontable.com/dist/handsontable.full.css">
    <script src="http://handsontable.com/dist/handsontable.full.js"></script>
@stop
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
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Manage</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Score</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-1">
                            <div id="scorepanel">

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-1">
                            <div style="padding: 5em">
                            <button class="btn btn-primary" id="saveButton">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="profile">Score Page </div>
                <div role="tabpanel" class="tab-pane" id="messages">...</div>
            </div>
        </div>
    </div>

    <script>

        $('#saveButton').click(
                function(){
                    console.log(hot.getData());
                }
        );


        var data = [
            {ID: 'af1', round1: 2, round2: 1, round3: 1, round4: 3},
            {ID: 'fd1', round1: 1, round2: 2, round3: 2, round4: 2},
            {ID: 'ff2', round1: 3, round2: 3, round3: 3, round4: 1},
            {ID: 'af2', round1: 4, round2: 4, round3: 4, round4: 4}
        ];

        var container = document.getElementById('scorepanel');



        var hot = new Handsontable(container, {
            data: data,
            colHeaders: ['ID','Round 1','Round 2','Round 3', 'Final'],
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