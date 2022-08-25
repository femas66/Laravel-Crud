<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belajar_sendiri extends Model
{
    use HasFactory;
    protected $table = 'belajar_sendiri';
    protected $fillable = ['nama', 'usia', 'sekolah'];
}
