<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
    protected $table = 'destinasi';
    protected $fillable = ['id_paket','nama_tempat_destinasi','kota_destinasi','gambar_destinasi'];

    public function paket(){
        return $this->belongsTo('App/paket','id_paket','id');
    }
}
