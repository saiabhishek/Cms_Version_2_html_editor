@extends('layouts.app')
@section('content')
<script language="javascript" type="text/javascript">

function addbutton() {
   document.editr.header.value += '<input type="button" value="button">';
}
function addtext() {
   document.editr.header.value += '<input type="text">';
}
function addtagh1() {
  
   document.editr.header.value += '<h1></h1>';
  }
 function addtagh2()
  {
    document.editr.header.value += '<h2></h2>';
  }
  function addtagh3(){
   document.editr.header.value += '<h3></h3>'; 
  }
 function clea(){
   document.editr.header.value = ' '; 
  }

</script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editor</div>
                <input type="button" value="Add Button" onClick="addbutton();">
                <input type="button" value="Add text" onClick="addtext();">
                
                   <input type="button" value="h1" onclick="addtagh1()">
                   <input type="button"value="h2" onclick="addtagh2()">
                   <input type="button" value="h3" onclick="addtagh3()">
                   <input type="button" value="clear" onclick="clea()">
                   <div class="panel-body">
                    {!! Form::open(['url'=>'/developer/update','name'=>'editr']) !!}
                     {!! Form::text('name',$reg1->name,['class'=>'form-control'])!!}
                    {!! Form::textarea('header',$reg1->header,['class'=>'form-control'])!!}
                    {{ Form::hidden('invisible', Auth::user()->name) }}
                    {!! Form::hidden('id',$reg1->id,['class'=>'form-control'])!!}
                    <input type="submit" name="demo" value="demo"class="btn btn-primary form-control">
                    <input type="submit" name="save" value="save" class="btn form-control">
                    {!! Form::close() !!}
                  </div>
               </div>
        </div>
       </div>
       </div>
@endsection