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
                        <div class="col-lg-6">
                            <h5>Coaches</h5>
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Save</th>
                                    <th>Remove</th>
                                </tr>
                                    @foreach($coaches as $coach)
                                        <tr>
                                            <td>{{ $coach->name }}</td>
                                            <td>{{ $coach->name }}</td>
                                            <td>
                                                <select name="edit_level">
                                                    <option value="1">Judge</option>
                                                    <option value="2">Coach</option>
                                                </select>
                                            </td>
                                            <td><button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span></button></td>
                                            <td><button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <h5>Judges</h5>
                            <ul>
                                @foreach($judges as $judge)
                                    <li class="non_style_list"><span>{{ $judge->name}}</span> <span>{{$judge->edit_level }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                    </div>

                </div>


            </form>
        </div>
    </div>
@stop