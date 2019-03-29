<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('newusers')->orderBy('id', 'asc')->get(); 
    }else{
      $value=DB::table('newusers')->where('id', $id)->first();
    }
    return $value;
  }

  public static function insertData($data){
  	//$value = 0;
    $value=DB::table('newusers')->where('email', $data['email'])->get();
    if($value->count() == 0){
      DB::table('newusers')->insert($data);
      return 1;
     }else{
       return 0;
     }
 
  }

  public static function updateData($id,$data){
    DB::table('newusers')
      ->where('id', $id)
      ->update($data);
  }

  public static function deleteData($id){
    DB::table('newusers')->where('id', '=', $id)->delete();
  }
 
}

