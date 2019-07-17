<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['nama_paket','durasi','gambar_paket','gambar_rencana'];

    public function type_paket(){
        return $this->belongsTo('App/type_paket','id_type','id');
    }
}
