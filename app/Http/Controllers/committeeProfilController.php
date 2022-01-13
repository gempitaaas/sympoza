<?php

namespace App\Http\Controllers;
use App\Models\CommitteeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class committeeProfilController extends Controller
{
    public function pstCreateCommittee(Request $request){
        $nama = $request->name;
        $email = $request->email;
        $position = $request->position;
        $institution = $request->institution;

        $data = CommitteeModel::updateOrCreate(
            [
                'position'=>$position],
            [
            "name" => $nama,
            "email" =>$email,
            "status" => $status,
            "title" =>  $title
            
            ]
            ,);
        return $data;
    }

    public function pstViewCommittee(Request $request){
        $data = DB::table('committee')->get();
         return DataTables::of($data)
                ->make(true);
    }
}
