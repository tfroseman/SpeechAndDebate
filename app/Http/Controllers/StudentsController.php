<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @param   $accountID
     *
     * @return \Illuminate\Http\Response
     */
    public function index($accountID)
    {
        $students =Student::where('school_id',$accountID)->get();

        $data = array(
            'accountID' => $accountID,
            'students' => $students,
        );
        return view('account.students')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param Requests\StudentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StudentRequest $request)
    {
        //Create a new student
        Student::create($request->all());
        //return $request;
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $accountID
     * @param  int $schoolID
     * @return \Illuminate\Http\Response
     */
    public function show($accountID, $schoolID)
    {
        return view('account.students');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
