<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['url', 'user_id'];

    // relacion inversa [1->m]
    public function user(){
        return $this->belongsTo('App\User');
    }
}
