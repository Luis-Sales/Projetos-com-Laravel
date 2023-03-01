<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'comentario',
    ];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
