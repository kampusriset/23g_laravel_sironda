<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota'; // nama tabel di database
    protected $fillable = ['nama'];
}
