<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\areas;

class AreaController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $list = areas::all();
        return view('areas/list',['areas' =>$list]);
    }
 
    function form($id=null){
        $areas = new areas();
        if($id!=null){
            $areas = areas::findOrFail($id);
        }
        return view('areas/form',['areas'=> $areas]);
    }

     function save(Request $request){

        $request->validate([
            "name"=>'required|max:50',            
        ]);

        $areas = new areas();
        if($request->id > 0){
            $areas = areas::findOrFail($request->id);
        }
        $areas->name = $request->name;       

        $areas->save();

        return redirect('/areas')->with('message', 'area guardada');
    }

    function delete($id){
        $areas = areas::findOrFail($id);
        $areas->delete();
        return redirect('/areas')->with('message', 'area eliminada exitosamente');
    }

}