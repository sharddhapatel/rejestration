<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\district;
use App\Models\State;
use App\Models\city;
class statecontroller extends Controller
{

   public function rejester(){
    $stats=State::all();
    return view('rejester',['stats'=>$stats]);
}


   public function insertrej(Request $request)
   {
       if ($request->isMethod('get')) {
           return view('rejester');
       } else {
           $data = $request->all();

           $ans = DB::table('rejester')->insert(["stat"=>$data['state'],"district"=>$data['district'],"city"=>$data['city']]);

           return redirect()->back()->with("message", "Insert Sucessfully...");
       }
   }

       public function getdis($id)
       {
           $dist= district::where("state_id",$id)->get()->pluck("name","id");

         return response()->json($dist);
       }

       public function getcity($id)
       {
           $city= city::where("districtid",$id)->get()->pluck("name","id");

         return response()->json($city);
       }
}
