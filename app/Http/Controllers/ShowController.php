<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ShowController extends Controller
{
   
    function show()
    {
        $data = Member::all();
        return view('show',['members'=>$data]);
    }
}
