<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
$users = User::all();
        return view('Layout.Pages.profile-ad', ['users'=>$users]);
    }

    public function insertUser(Request $request)
    {
        // return $request->input();
        $request->validate([
            'img_profile',
            'fname'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role'=> 'required',

        ]);

        

        $query = DB::table('users')->insert([
            'img_profile' => $request->input('img_profile'), 
            'fname' => $request->input('fname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ]);

        if($query){
            return back()-> with('success', 'data inserted');
            }else{
                return back()-> with('failed', 'data not inserted');
        }
    }
}
