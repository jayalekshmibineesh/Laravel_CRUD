<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
public function index()
{
  return view('index') ; 
}
public function register()
{
    return view('register');

}
public function registerdata(Request $request)
{
  $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'mobile'=>'required|max:10',
 ]); 
    $name =$request->name;
    $email=$request->email;
    $mobile=$request->mobile;
    Employee::create([
        'name'=>$name,
        'email'=>$email,
        'mobile'=>$mobile
    ]);
    return redirect()->route('register')->with('message',"Registered successfully");
}
public function view()
{
  $view=Employee::all();
  return view('view',compact('view'));
}
public function edit($id)
{
  $data=Employee::find($id);
  return view('edit',compact('data'));
}
public function update(Request $request,$id)
{
  $data=Employee::find($id);
  $request->validate([
    'email'=>'email',
    'mobile'=>'max:10',
  ]);
  $data->name=$request->input('name') ;
  $data->email=$request->input('email');
  $data->mobile=$request->input('mobile');
  
$data->update();
return redirect()->route('view')->with('success',"updated successfully");
}
public function delete($id)
{
  Employee::find($id)->delete();
  return redirect()->route('view')->with('success','deleteed successfully');
}
}
