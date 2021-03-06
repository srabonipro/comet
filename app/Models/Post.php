<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Get User Info
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // get Categories
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    // get tags
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
