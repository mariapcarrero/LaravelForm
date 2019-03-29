<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Routing;
//use App\Http\Controllers;
class PagesController extends Controller{
 
  public function index($id=0){
 
    // Fetch all records
    $userData['data'] = Page::getuserData();
 
    $userData['edit'] = $id;

    // Fetch edit record
    if($id>0){
      $userData['editData'] = Page::getuserData($id);
    }

    // Pass to view
    return view('index')->with("userData",$userData);
  }

  public function save(Request $request){
 
    if ($request->input('submit') != null ){

      // Update record
      if($request->input('editid') !=null ){
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $age = $request->input('age');
        $email = $request->input('email');
        $password = $request->input('password');
        $editid = $request->input('editid');

        if($name !='' && $email != ''){
           $data = array('name'=>$name,"email"=>$email);
 
           // Update
           Page::updateData($editid, $data);

           Session::flash('message','Update successfully.');
 
        }
 
      }else{ // Insert record
	        $name = $request->input('name');
	        $lastname = $request->input('lastname');
	        $age = $request->input('age');
	        $email = $request->input('email');
	        $password = $request->input('password');

         if($name !='' && $lastname !='' && $age != '' && $email != '' && $password != ''){
            $data = array('name'=>$name,"lastname"=>$lastname,"age"=>$age,"email"=>$email,"password"=>$password);
 
            // Insert
            $value = Page::insertData($data);
            if($value){
              Session::flash('message','Bienvenido, '. $name);
            }
            else{
              Session::flash('message','El correo ya está en uso.');
            }
 
         }
      }
 
    }
    return redirect()->action('PagesController@index',['id'=>0]);
  }

  public function deleteUser($id=0){

    if($id != 0){
      // Delete
      Page::deleteData($id);

      Session::flash('message','Delete successfully.');
      
    }
    return redirect()->action('PagesController@index',['id'=>0]);
  }
}
