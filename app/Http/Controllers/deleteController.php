<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\paket;
use App\destinasi;
use App\fasilitas;
use App\testimoni;

class deleteController extends Controller
{
    public function deletePaket($id){
        destinasi::where('id_paket','=',$id)->delete();
        fasilitas::where('id_paket','=',$id)->delete();
        testimoni::where('id_paket','=',$id)->delete();
        paket::where('id',$id)->delete();

        return response()->json([
            "status" => true
        ]);
    }

    public function deleteDestinasi($id){
        destinasi::where('id',$id)->delete();

        return response()->json([
            "status" => true
        ]);
    }

    public function deleteFasilitas($id){
        fasilitas::where('id',$id)->delete();

        return response()->json([
            "status" => true
        ]);
    }

    public function deleteTestimoni($id){
        testimoni::where('id',$id)->delete();

        return response()->json([
            "status" => true
        ]);
    }
}
