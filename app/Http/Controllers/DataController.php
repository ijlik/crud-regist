<?php

namespace App\Http\Controllers;

use App\Category;
use App\Regist;
use App\Sector;
use App\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showResort($cat_id){
        $category = Category::find($cat_id);
        if(auth()->user()->role == User::ROLE_POLDA) {
            $sector = Sector::all();
        } else {
            $sector = Sector::where('id','<>',auth()->user()->id_sector)->get();
        }

        return view('data.index',[
            'name'=>$category->name,
            'sector'=>$sector,
            'id'=>$category->id
        ]);
    }

    public function showDetail($cat_id,$res_id){
        $category = Category::find($cat_id);
        $sector = Sector::find($res_id);
        $data = Regist::where('id_sector',$sector->id)->where('id_category',$cat_id)->get();
        return view('data.detail',[
            'category'=>$category,
            'sector'=>$sector,
            'data'=>$data
        ]);
    }
}
