<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;

class Artist extends Model
{
    //
    protected $table = 'artists';

    public function song(){
    	return $this->hasMany(Song::class, 'artist_id');
    }
}
