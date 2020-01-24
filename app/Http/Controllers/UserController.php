<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sector;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index (){
        $data = DB::table('users')->join('sector','users.id_sector','=','sector.id')
                ->select(['users.name','sector.city as resort','users.username','users.id'])->get();
        $sector = Sector::orderBy('name')->get();
        return view('users.index',[
            'data'=>$data,
            'sector'=>$sector
        ]);
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required|string',
            'id_sector'=>'required|string',
            'username'=>'required|string',
            'password'=>'required|string',
        ]);

        $data= User::where('id_sector',$request->id_sector)->first();
        if(!is_null($data)){
            return redirect()->back()->withErrors('Data sudah ada');
        }
        DB::transaction(function () use ($request){
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->id_sector = $request->id_sector;
            $user->role=User::ROLE_POLRES;
            $user->save();
        });
        return redirect()->back()->with([
            'message'=>'Data berhasil ditambahkan',
            'type'=>'success'
        ]);
    }
}
