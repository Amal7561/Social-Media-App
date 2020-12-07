<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        $id = Auth::user()->id;
        $users = ModelsUser::find($id);

        $username = $request->input('username');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $password = $request->input('password');
        $img = $request->input('pic');
        
        

        if($request->hasFile('pic'))
        {
             //get filename with extension
             $filenamewithextension = $request->file('pic')->getClientOriginalName();
            
             //get filename without extension
             $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
             //get file extension
             $extension = $request->file('pic')->getClientOriginalExtension();
      
             
             //filename to store
             $filenametostore = $filename.'_'.time().'.'.$extension;

             //Upload File
            $request->file('pic')->move('img/profile', $filenametostore);

        }

        $users->profilepic = $filenametostore;
        $users->name = $username;
        $users->email = $email;
        $users->gender = $gender;
        $users->password = $password;

        if($users->save())
        {
            $data = array(
                'yes'=>"Data successfully Updated"
            );
        }
        else
        {
            $data = array(
                'no'=>"Data not Updated"
            );
        }

        return back()->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
