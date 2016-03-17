<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class SchoolController extends Controller
{
    private $admin = 0;
    private $judge = 1;
    private $coach = 2;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource. - In this event is is pulling with a blank school id
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(\Auth::User()->id);

        $schoolEmail = DB::table('schools')
            ->select('email')
            ->where('id', User::findOrFail(\Auth::User()->id))
            ->get();

        $judges = DB::table('users')
            ->select('id','name','email','edit_level')
            ->where('edit_level', $this->judge)
            ->get();

        $coaches = DB::table('users')
            ->select('id','name', 'email', 'edit_level')
            ->where('edit_level', $this->coach)
            ->get();

        $school = DB::table('schools')
            ->select('name')
            ->where('id',$user->id)
            ->first();

        $data = array(
            'school' => $school,
            'user' => $user,
            'emails' => $schoolEmail,
            'judges' => $judges,
            'coaches' => $coaches);

        return view('account.school')->with($data);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $schoolEmail = DB::table('schools')->select('email')->where('id', $accountID)->get();

        $data = array(
            'user' => User::findOrFail($accountID),
            'emails' => $schoolEmail);

        return view('account.school')->with($data);
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
