<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class postController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
	public function view()
	{	
		$inp=\App\Post::all();
		return view('cms/post')->with('inp',$inp);
	}
    public function index()
    {
       	$input=Request::all();

    	$reg = new \App\post;
		$reg->posts = $input['posts'];
		$reg->user=$input['invisible'];
		$reg->save();
		return redirect('/post');
    }
}