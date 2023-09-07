<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $allBlog=DB::table('blogs')->get();
        return view('welcome',compact(['allBlog']));
    }
}
