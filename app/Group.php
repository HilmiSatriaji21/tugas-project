<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['nama_group','anggota'];
    public $timestamps = true;
}
