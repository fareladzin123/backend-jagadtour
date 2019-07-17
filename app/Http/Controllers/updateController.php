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


class updateController extends Controller
{

    public function updatePaket(Request $request,$id) {
        $photo = $request->file('gambar_paket');
        $gambar_paket = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_paket')->put($gambar_paket,File::get($photo));

        $photo2 = $request->file('gambar_rencana');
        $gambar_rencana = $photo2->getFilename().'.'.$photo2->getClientOriginalExtension();
        Storage::disk('folder_gambar_rencana')->put($gambar_rencana,File::get($photo2));

        $json= paket::where('id',$id)->update([
            'id_type' => $request->input('id_type'),
            'nama_paket' => $request->input('nama_paket'),
            'durasi' => $request->input('durasi'),
            'gambar_paket' => $gambar_paket,
            'gambar_rencana' => $gambar_rencana,
            'harga_dewasa' => $request->input('harga_dewasa'),
            'harga_anak' => $request->input('harga_anak'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($json,200);
    }

    public function updateDestinasi(Request $request, $id){

        $photo = $request->file('gambar_destinasi');
        $gambar_destinasi = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_destinasi')->put($gambar_destinasi,File::get($photo));

        $json = destinasi::where('id',$id)->update([
            'id_paket' => $id,
            'nama_tempat_destinasi' => $request->input('nama_tempat_destinasi'),
            'kota_destinasi' => $request->input('kota_destinasi'),
            'gambar_destinasi' => $gambar_destinasi,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return response()->json($json,200);
    }

    public function updateFasilitas(Request $request, $id){

        $photo = $request->file('gambar_fasilitas');
        $gambar_fasilitas = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_fasilitas')->put($gambar_fasilitas,File::get($photo));

        $json = fasilitas::where('id',$id)->update([
            'id_paket' => $id,
            'fasilitas' => $request->input('fasilitas'),
            'gambar_fasilitas' => $gambar_fasilitas,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($json,200);

        return response()->json($json,200);
    }

    public function updateTestimoni(Request $request, $id){

        $photo = $request->file('foto_testimoni');
        $foto_testimoni = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_foto_testimoni')->put($foto_testimoni,File::get($photo));

        $json = testimoni::where('id',$id)->update([
            'id_paket' => $id,
            'nama_testimoni' => $request->input('nama_testimoni'),
            'kota_testimoni' => $request->input('kota_testimoni'),
            'testimoni' => $request->input('testimoni'),
            'foto_testimoni' => $foto_testimoni,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($json,200);
    }
}
