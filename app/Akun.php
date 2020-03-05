<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $fillable=['nama','email','tlp','id_profil','id_postingan','id_group','id_galery'];
    public $timestamps = true;

    public function profil()
    {
        return $this->HasOne('App\Profil','id_profil');
    }
    public function postingan()
    {
        return $this->HasMany('App\Postingan','id_postingan');
    }
    public function group()
    {
        return $this->belongsToMany('App\Group','id_group');
    }
}
