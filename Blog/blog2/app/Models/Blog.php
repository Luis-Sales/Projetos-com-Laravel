<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [

        "titulo",
        "texto",
        "image",
        "subtitulo",
    ];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
