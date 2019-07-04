<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Usersdetails;
Use Log;

trait UsersTraits{

	 public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required|max:255',
        'email'=>'required|email',
        'pincode'=>'required|max:6',
        ]);

        $user = Usersdetails::where('email',$request->input('email')) 
                            ->orWhere('name',  $request->input('name'))
                            ->first();
        
        if($user)
        {
        	Log::error('Unsuccessful,EMAIL NOT SENT');
        	return response()->json('0',200);
        }
        
        if(!$user){

            $users = new Usersdetails();  
            $users->name=$request->input('name');
            $users->email =$request->input('email');
            $users->pincode=$request->input('pincode');
            $users->save();

            Log::info('success,EMAIL SENT');
            return  response()->json("1",201);       
        }
       
    }


    public function show(Usersdetails $usersdetails)
    {
        return response()->json(Usersdetails::get());
    }

}

?> 