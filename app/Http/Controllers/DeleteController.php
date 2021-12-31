<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DeleteController extends Controller
{
   function delete(Request $request,$id)
   {
        $member = Member::findOrfail($id)->delete();

       return redirect('show');
   }

   function delete2(Request $request)
   {
    $member = Member::findOrfail($request->id)->delete();

    return redirect('show');
   }
}
