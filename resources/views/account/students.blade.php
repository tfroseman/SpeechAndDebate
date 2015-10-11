@extends('layout')

@section('nav')
    <li><a href="/account/">My Account </a></li>
    <li><a href="/account//school/">School Account</a></li>
    <li class="active"><a href="#">Students <span class="sr-only">(current)</span></a></li>
@stop

@section('loginout')
    <a href="/logout">Logout</a>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="col-lg-6">
                <a class="btn btn-default" href="#" role="button" style="width: 100%" data-toggle="modal"
                   data-target="#addStudent">Add Student</a>
            </div>
            <div class="col-lg-6">
                <a class="btn btn-default" href="#" role="button" style="width: 100%">Import Students</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Category</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @

                @foreach($students as $student)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$student->name}}</td>
                        <td>
                            {!! Form::select('Grade', array(12,11,10,9,8,7), $student->grade, ['class'=>'form-control']) !!}
                        </td>
                        <td style="padding: 8px">
                            {!! Form::select('Category' , $student->grade, ['class'=>'form-control']) !!}
                        </td>
                        <td>
                            <button type="button" class="btn btn-default"><span
                                        class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop