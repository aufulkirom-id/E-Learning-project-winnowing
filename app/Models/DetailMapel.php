<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMapel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mapel', 'id_guru', 'id_kelas',
    ];
}
