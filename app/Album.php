<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;

class Album extends Model
{
    //
    protected $table = 'albums';

    public function song(){
    	return $this->hasMany(Song::class, 'album_id');
    }
}
