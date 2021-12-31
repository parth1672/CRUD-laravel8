<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UpdateController extends Controller
{
    function update($id)
    {
        //for getting data form database
        $data = Member::find($id);
        $hobbies = explode( ",",$data->hobbies);

        return view('update',['data'=>$data,'hobbies'=>$hobbies]);
    }

    function updatedata(Request $request)
    {
        //for update data in database
         
         $data=Member::find($request->id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->mobile=$request->mobile;
         $data->gender=$request->gender;
         $data->platform=$request->platform;

        $hobbie= implode(",",$request->h) ; // array to string conversion
         $data->hobbies=$hobbie;

        if($request->image != '')
        {
            $imageName = time().'.'.$request->image->extension();  

            $request->image->move(public_path('images'), $imageName);
   
            $data->image=$imageName;
        }
         $data->save();

        return redirect('show');
    }

    function updatedata2(Request $request)
    {
        $data=Member::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->gender=$request->gender;
        $data->platform=$request->platform;

       $hobbie= implode(",",$request->h) ; // array to string conversion
        $data->hobbies=$hobbie;

       if($request->image != '')
       {
           $imageName = time().'.'.$request->image->extension();  

           $request->image->move(public_path('images'), $imageName);
  
           $data->image=$imageName;
       }
        $data->save();

       return redirect('show');
    }
}
