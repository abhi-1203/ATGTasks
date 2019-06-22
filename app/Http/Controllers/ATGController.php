<?php

namespace App\Http\Controllers;

use App\Usersdetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class ATGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required|max:255',
        'email'=>'required',
        'pincode'=>'required|max:6',
        ]);



         
        //$users->name=$request->input('name');
        

        $user = Usersdetails::where('name', $request->input('name') )->first();
        if($user)
        {
             return redirect()->route('users.create')->with('not_success','Could not insert details. Name already exists!!');
        }
        
        if(!$user){

            $users = new Usersdetails();  
            $users->name=$request->input('name');
            $users->email =$request->input('email');
            $users->pincode=$request->input('pincode');
            $users->save();
            return redirect()->route('users.create')->with('success','User Details updated successfully');
}
       
    }

    
   
}
