<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Form;
class formController extends Controller
{
    public function register(){
        $url = url('/form');
        $title = "User Registration Form";
        $data = compact('url', 'title');
        return view('form')->with($data);
    }
    public function data(Request $request){
        print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'pass' => 'required'
        ]);
       
        $reg = new Form();
        $reg->name = $request['name'];
        $reg->email = $request['email'];
        $reg->pass = $request['pass'];
        $reg->save();
        return redirect('reg/view');
    }
    public function view(){
        $regData = Form::all();

        $data = compact('regData');
        return view('reg-view')->with($data);
    }
    public function dlt($id){
        $find = Form::find($id)->delete();
        return redirect('reg/view');
        
    }
    public function edit($id){
        $data = Form::find($id);
        $url = url('/reg/update')."/". $id;
        $title = "Update User Information";
        $records = compact('data', 'url', 'title');
        return view('form')->with($records);
    }
    public function update($id, Request $request){ 
        $data = Form::find($id);
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->pass = $request['pass'];
        $data->save();
        return redirect('reg/view');
    }

}
