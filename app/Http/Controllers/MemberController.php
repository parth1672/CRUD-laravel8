<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function addData(Request $request)
    {
        $request->validate([


            // 'mobile' => 'required|mobile|unique:members',

            'email' => 'required|email|unique:members'

        ]);
        
         $member = new Member;
         $member->id=$request->id;
         $member->name=$request->name;
         $member->email=$request->email;
         $member->mobile=$request->mobile;
         $member->gender=$request->gender;
         $member->platform=$request->platform;

        //  print_r($member->h=$request->h); for print array
        // die($request->image);
        $hobbie= implode(",",$request->h) ; // array to string conversion
         $member->hobbies=$hobbie;


         $imageName = time().'.'.$request->image->extension();  

         $request->image->move(public_path('images'), $imageName);

         $member->image=$imageName;
        //  $request->file('image')->store('image');s
         $member->save();
         return redirect('/');


    }

}
