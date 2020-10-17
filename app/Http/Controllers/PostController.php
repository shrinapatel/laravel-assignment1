<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{


    public function index()
    {
        $post_list=post::orderBy('post_date','DESC')->get();
        return view('home',compact('post_list'));
    }
    public function show($id)
{
    $post1=post::findOrFail($id);
    return view('detail',compact('post1'));
}    
}
