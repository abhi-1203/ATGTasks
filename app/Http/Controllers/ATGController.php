<?php

namespace App\Http\Controllers;

use App\Usersdetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

use App\Traits\UsersTraits;

class ATGController extends Controller
{
    use UsersTraits;

    
    public function index()
    { 
        //return response()->json(Usersdetails::get());
    }

   
    public function create()
    {
        return view('userdetails.create');
    }

}
