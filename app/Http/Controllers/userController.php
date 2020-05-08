<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function list(){
      $user = DB::table('user')->get();

      return view('user.user', ['user'=>$user]);
    }
    public function addUser(){
      return view('user.addUser');

    }
    public function addNewUser(Request $request){
      DB::table('user')->insert([
        'user_name' =>  $request->userName,
        'user_email'=>  $request->userEmail,
        'user_phone'=>  $request->userPhone,
        'user_addres'=> $request->userAddress
      ]);

      return redirect('/user');
    }
    public function editUser($id){
      $user = DB::table('user')->where('user_id', $id)->get();

      return view('user.editUser',['user' => $user]);

    }
    public function updateUser(Request $request){
      DB::table('user')->where('user_id', $request->id)->update([
          'user_name' =>  $request->userName,
          'user_email'=>  $request->userEmail,
          'user_phone'=>  $request->userPhone,
          'user_addres'=> $request->userAddress
      ]);

      return redirect('/user');
    }
    public function deleteUser($id){
      DB::table('user')->where('user_id', $id)->delete();

      return redirect('/user');
    }
}
