<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->user_id;
        $cats = Category::where('user_id',$user_id)->get();
        $notes = Note::where('notes.user_id',$user_id)->join('category', "notes.cat_id","=","category.cat_id")->get();
        return view('home',['cats'=>$cats,'notes'=>$notes]);
        // return view('home');
    }
}
