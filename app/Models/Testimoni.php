<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string
     */

    protected $table = 'testimoni';

    protected $fillable = [
        'pekerjaan',
        'program_studi',
        'angkatan',
        'judul_utama',
        'link_video',
    ];
}
