<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Student</h4>
            </div>
            <form method="POST" action="/account/{{$accountID}}/students">
                {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="school_id" value="{{ $accountID }}">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade:
                            <select name="grade" class="form-control">
                                @foreach(\App\Http\Utilities\Grade::all() as $grade)
                                    <option value="{{ $grade }}">{{ $grade }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <select name="category" class="form-control">
                            @foreach(\App\Http\Utilities\Categories::all() as $name=> $code )
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>