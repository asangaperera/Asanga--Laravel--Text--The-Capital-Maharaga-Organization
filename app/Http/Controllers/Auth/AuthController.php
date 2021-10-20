<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use DB;
class AuthController extends Controller
{
    public function registerUser()
    {

      return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'dob' => 'required|date|',
            'gender' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'c_number' => 'required|string|max:10|min:10',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        DB::table('users')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'c_number' => $request->c_number,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('auth.register','Add User Deails Successfuly');
    }

    public function login()
    {

      return view('auth.login');
    }
    
   
    public function userView()
    {
      $users = DB::table('users')->get();
      return view('auth.view',compact('users'));
    }

    public function usermView($id)
    {
      $users = DB::table('users')->where('id', $id)->first();
      return view('auth.viewmember',compact('users'));
    }


    public function edituser($id) 
  {
    $user = DB::table('users')->where('id', $id)->first();
    return view('auth.editUser',compact('user'));
  }

  public function updateuser(Request $request)

  {
    $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'dob' => 'required|date|',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'c_number' => 'required|string|max:10|min:9'
        
      
    ]);

    DB::table('users')->where('id',$request->id)->update([
        'fname' => $request->fname,
        'lname' => $request->lname,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'email' => $request->email,
        'c_number' => $request->c_number
        
    ]);
     return back()->with('editUser','Details Updated Successfuly');

}


    public function deleteuser($id)
  {
    DB::table('users')->where('id', $id)->delete();
    return back()->with('auth.view','Details deleted Successfuly');
  }


}