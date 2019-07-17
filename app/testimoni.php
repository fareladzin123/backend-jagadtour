<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $table = 'testimoni';
    protected $fillable = ['id_paket','nama_testimoni','kota_testimoni','testimoni','foto_testimoni'];

    public function paket(){
        return $this->hasMany('App/paket','id_paket','id');
    }
}
