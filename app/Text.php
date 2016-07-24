<?php

namespace Basic;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = ['title', 'body'];

    public function likes(){
        return $this->morphMany(Like::class, 'likeable');
    }
}
