<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawais";

    protected $fillable = [

        'id', 'nama', 'tgl_lahir'

    ];

    public $timestamps      = false;
}
