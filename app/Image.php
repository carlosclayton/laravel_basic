<?php

namespace Basic;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['description', 'resolution'];

    public function likes(){
        return $this->morphMany(Like::class, 'likeable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
