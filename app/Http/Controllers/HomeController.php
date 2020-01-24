<?php

namespace App\Http\Controllers;

use App\Category;
use App\Regist;
use App\Sector;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function category(){
        $data = Category::all();
        return view('category.index',[
            'data'=>$data
        ]);
    }

    public function addCategory(Request $request){
        $request->validate([
            'name'=>'required|string'
        ]);
        $data= Category::where('name','like',$request->name)->first();
        if(!is_null($data)){
            return redirect()->back()->withErrors('Data sudah ada');
        }
        DB::transaction(function () use ($request){
            $category = new Category();
            $category->name = $request->name;
            $category->save();
        });
        return redirect()->back()->with([
            'message'=>'Data berhasil ditambahkan',
            'type'=>'success'
        ]);
    }

    public function deleteCategory(Request $request,$id){
        $category = Category::find($id);
        $data = Regist::where('id_category',$id)->get();
        if($data->count() > 0){
            return redirect()->back()->withErrors('Data regis sudah ada, kategori ini tidak bisa dihapus');
        }
        $category->delete();
        return redirect()->back()->with([
            'message'=>'Data berhasil dihapus',
            'type'=>'success'
        ]);
    }

    public function sector(){
        $data = Sector::all();
        return view('sector.index',[
            'data'=>$data
            ]);
    }

    public function addSector(Request $request) {
        $request->validate([
            'city'=>'required|string'
        ]);
        $data = Sector::where('city','like',$request->city)->first();
        if(!is_null($data)){
            return redirect()->back()->withErrors('Data Sudah Ada');
        }
        DB::transaction(function () use ($request){
            $sector = new Sector();
            $sector->name = 'Polres '.$request->city;
            $sector->city = $request->city;
            $sector->save();
        });
        return redirect()->back()->with([
            'message'=>'Data berhasil ditambah',
            'type'=>'success'
        ]);
    }

    public function deleteSector(Request $request,$id){
        $category = Sector::find($id);
        $data = Regist::where('id_sector',$id)->get();
        $user = User::where('id_sector',$id)->first();
        if($data->count() > 0){
            return redirect()->back()->withErrors('Data regis sudah ada, Resort ini tidak bisa dihapus');
        }
        if(!is_null($user)) {
            return redirect()->back()->withErrors('Data user sudah ada, Resort ini tidak bisa dihapus');
        }
        $category->delete();
        return redirect()->back()->with([
            'message'=>'Data berhasil dihapus',
            'type'=>'success'
        ]);
    }


}
