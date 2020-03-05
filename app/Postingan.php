<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $fillable=['deskripsi','foto','id_tag'];
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsToMany('App\Tag','id_tag');
    }
}
