@inject('grades','App\Http\Utilities\Grade')
@extends('layout')

@section('nav')
    <li><a href="/account/{{$accountID}}">My Account </a></li>
    <li><a href="/account/{{$accountID}}/school/">School Account</a></li>
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

                <?php $i = 1; ?>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$student->name}}</td>
                        <td>
                            <div class="form-group">
                                <select name="grade" class="form-control">
                                    @foreach(\App\Http\Utilities\Grade::all() as $grade)
                                        @if($grade == $student->grade)
                                            <option value="{{ $grade }}" selected>{{ $grade }}</option>
                                        @endif
                                        <option value="{{ $grade }}">{{ $grade }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td style="padding: 8px">
                            <div class="form-group">
                                <select name="grade" class="form-control">
                                    @foreach(\App\Http\Utilities\Categories::all() as $name => $code)
                                        @if($code == $student->category)
                                            <option value="{{ $code }}" selected>{{ $name }}</option>
                                        @endif
                                        <option value="{{ $code }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-default"><span
                                        class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
                        </td>

                    </tr>
                    <?php $i++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('account.studentform')

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop