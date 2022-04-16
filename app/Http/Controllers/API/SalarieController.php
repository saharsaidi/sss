<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Salarie;
Use Log;

class SalarieController extends Controller
{
    public function getAll(){
        $data = Salarie::get();
        return response()->json($data, 200);
      }

      public function create(Request $request){
        $data['nom_prenom'] = $request['nom_prenom'];
        $data['date_de_naissance'] = $request['date_de_naissance'];
        $data['adresse'] = $request['adresse'];
        $data['phone'] = $request['phone'];
        $data['salaire'] = $request['salaire'];
        Salarie::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
      }

      public function delete($id){
        $res = Salarie::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }

      public function get($id){
        $data = Salarie::find($id);
        return response()->json($data, 200);
      }

      public function update(Request $request,$id){
        $data['nom_prenom'] = $request['nom_prenom'];
        $data['date_de_naissance'] = $request['date_de_naissance'];
        $data['adresse'] = $request['adresse'];
        $data['phone'] = $request['phone'];
        $data['salaire'] = $request['salaire'];
        Salarie::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }
    //
}
