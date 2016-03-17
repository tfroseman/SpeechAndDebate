<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * GET: Account Page of current user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index', ['user' => User::findOrFail(\Auth::User()->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($request->input('id'));
        $user->edit_level = $request->input('edit_level');
        $user->save();
        return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->school_id = 1;
        $user->save();

        if(User::find($id)->school_id != 1){
            return "Could not remove user. Please contact support";
        }else{
            return "true";
        }
    }
}
