<?php

namespace Basic;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // Conversoes do laravel
    // protected $table = "posts";
    // protected $primaryKey = "id";
    // public $timestamps = false;
    protected $dates = ['created_at', 'update_at', 'published_at'];

    protected $fillable = [
        'title', 'body', 'published_at'
    ];

    /*
    protected $guarded = [
        'id', 'created_at'
    ];
    */

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return ucfirst($value);
    }

}
