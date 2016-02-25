<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class DeveloperController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
	public function view()
  	{	
    		return view('cms/developer');
	   }
  public function index()
    {
       	$input=Request::all();
        $reg1 = new \App\developers;
        $reg = new \App\developers;
        $reg1->header=$input['header'];
        $reg1->name=$input['name'];
        $reg1->user=$input['invisible'];
        if(Request::get('demo')) 
          {
            $reg->i=1;
            return view('cms/view')->with('reg1',$reg1)->with('reg',$reg);     
          } 
        elseif(Request::get('save'))
         {
           $reg1->save();
           return view('cms/developer');  
        } 
  	}
    
  public function view2()
    {     
      return view('cms/view');
    }
  public function viewdev()
    {
  	   $inp=\App\developers::all();
	     return view('cms/viewdev')->with('inp',$inp);
    }

  public function viewd()
    {
      $input=Request::all();
      $reg1 = new \App\developers;
      $reg = new \App\developers;
      $id=$input['id'];
      $reg1 = \App\developers::find($id);
      if(Request::get('view')) 
        {
        $reg->i=1;
        return view('cms/view')->with('reg',$reg)->with('reg1',$reg1);
        }
      elseif(Request::get('edit')) 
        {
         return view('cms/editor')->with('reg1',$reg1);
        }
    }
  public function viewd1($name)
    {
      $reg2 = new \App\developers;
      $reg2=$name;
      $reg = new \App\developers;
      $reg1 = \App\developers::where("name","$name")->get();
      $reg->i=2;
      return view('cms/view')->with('reg',$reg)->with('reg1',$reg1);
    }
  public function update()
    {
      $input=Request::all();
      $reg = new \App\developers;
      $reg1 = new \App\developers;
      $reg1->name=$input['name'];
      $reg1->header=$input['header'];
      $reg1->user=$input['invisible'];
      $reg2 = array('header' => $input['header'],'user'=>$input['invisible'],'name'=>$input['name']);
      if(Request::get('demo')) 
        {
          $reg->i=1;
          return view('cms/view')->with('reg',$reg)->with('reg1',$reg1);     
        } 
      elseif(Request::get('save')) 
      {
        $id=$input['id'];
         $reg->i=1;
         $reg3=\App\developers::find($id)->update($reg2); 
        return view('home');     
      }
    }
}