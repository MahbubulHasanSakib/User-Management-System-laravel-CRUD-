<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=UserModel::all();
        return view('allUsers',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
          'name'=>'required',
          'email'=>'required',
          'gender'=>'required',
          'status'=>'required',
        ]);
        UserModel::create([

            'id' => $request->id, //<--- if this is autoincrement then just delete this line
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'status' => $request->status
        ]);
    
        return redirect('/users');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $user)
    {
        //
    return view('editUsers',compact('user'));
      // $user = DB::table('user_models')->where('id', $user)->first();
       //return view('editUsers',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$user)
    {
        //
        //
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'status'=>'required',
          ]);
        $User = UserModel::where('id', $user)->first();

        $User->update($request->all());
        //UserModel::where('id', $user)->update($request->all());
    
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        UserModel::destroy($user);
        return redirect('/users');
    }
}
