<?php

namespace Basic;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function texts(){
        return $this->morphedByMany(Text::class, 'taggable');
    }

    public function images(){
        return $this->morphedByMany(Image::class, 'taggable');
    }

}
