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

                <?php $i=1; ?>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$student->name}}</td>
                        <td>
                            {!! Form::select('Grade', array(12,11,10,9,8,7), $student->grade, ['class'=>'form-control']) !!}
                        </td>
                        <td style="padding: 8px">
                            {!! Form::select('Category', $categories, $student->category, ['class'=>'form-control'])!!}
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

    <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Student</h4>
                </div>
                <form method="POST" action="/account/{{$accountID}}/students">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade:
                                <select name="grade" class="form-control">
                                    @foreach(grade::all() as $grade)
                                        <option value="{{ $grade }}">{{ $grade }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::select('Category', $categories, "0", ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        {!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop