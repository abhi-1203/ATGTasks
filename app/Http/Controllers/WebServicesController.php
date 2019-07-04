<?php

namespace App\Http\Controllers;

use App\Usersdetails;
use Illuminate\Http\Request;
Use Log;

use App\Traits\UsersTraits;

class WebServicesController extends Controller
{
   

   use UsersTraits;

   
    public function index()
    {
       // return response()->json(Usersdetails::get());
        return view('userdetails.create');
    }

    public function create(Request $request)
    {
     return view('userdetails.create');  
    }

}
