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

class getController extends Controller
{
    public function getPaket(){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.durasi','paket.gambar_paket','paket.gambar_rencana','paket.harga_dewasa','paket.harga_anak']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketbyid($id){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->where('paket.id',$id)
            ->get(['paket.nama_paket','type_paket.type','paket.durasi','paket.gambar_paket','paket.gambar_rencana','paket.harga_dewasa','paket.harga_anak']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getDestinasi($id_paket){
        $data = destinasi::where('id_paket',$id_paket)
            ->get(['id','id_paket','nama_tempat_destinasi','kota_destinasi','gambar_destinasi']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getFasilitas($id_paket){
        $data = fasilitas::where('id_paket',$id_paket)
            ->get(['id','id_paket','fasilitas','gambar_fasilitas']);
        $response = [
          'data' => $data
        ];
        return response()->json($response);
    }

    public function getTestimoni($id_paket){
        $data = testimoni::where('id_paket',$id_paket)
            ->get(['id','id_paket','nama_testimoni','kota_testimoni','testimoni','foto_testimoni']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

}
