<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Role;
use GuzzleHttp\Psr7\Query;

class RolesController extends Controller
{
    public function connexion(){
        return view('views.dashboard');
    }

    public function roleView(){
        return view('Layout.Pages.roles');
    }



    public function addRole(Request $request){
        
        $request->validate([
            'id'=> 'required',
            'Libelle_Role'=> 'required',
        ]);

        $query = DB::table('roles')->insert([
            'id'=>$request->input('id'),
            'Libelle_Role'=>$request->input('Libelle_Role'),
        ]);

        if($query){
            return back()-> with('success', 'data inserted');
            }else{
                return back()-> with('failed', 'data not inserted');
        }
        // $newRole = Role::addRole($role);
        // return redirect(route('Layout.Pages.roles'));
    }
}
