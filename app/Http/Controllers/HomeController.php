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
        $cats = Category::where('user_id',$user_id)->orderBy('cat_id', 'asc')->get();
        $notes = Note::where('notes.user_id',$user_id)->join('category', "notes.cat_id","=","category.cat_id")->orderBy('note_id', 'desc')->get();
        $counted = $notes->countBy('cat_id');
        $counted->all();
        $colors = ['#fb0094','#0000ff','#00ff00','#ffcd00','#ff0000','#0abde3','#10ac84','#33d12d','#5f27cd'];
        return view('home',['count'=>$counted,'notes'=>$notes,'colors'=>$colors,'cats'=>$cats]);
    }
}
