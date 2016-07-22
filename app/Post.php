<?php

namespace Basic;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    // Conversoes do laravel
    // protected $table = "posts";
    // protected $primaryKey = "id";
    // public $timestamps = false;
    protected $dates = ['created_at', 'update_at', 'published_at', 'deleted_at'];


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

    public function scopeOfType($query, $type){
        return $query->where("type", $type);
    }

}
