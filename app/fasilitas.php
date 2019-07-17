<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['id_paket','fasilitas','gambar_fasilitas'];

    public function paket(){
        return $this->hasMany('App/paket','id_paket','id');
    }
}
