<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index(){
     
    }
    public function upload(Request $request){
        $user_id = auth()->user()->user_id;
     $request->validate([
        "img" => "required",
     ]);
     $newName = time().$request->img->getClientOriginalName();
     $request->img->move(public_path('images'),$newName);
     $updatePic = User::where('user_id',$user_id)->update([
        'image_name' => $newName, 
      ]);
      return redirect('/home');
    }

}
