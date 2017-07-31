<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;

class Lyric extends Model
{
    //
    protected $table = 'lyrics';
    
    public function song()
    {
        return $this->belongsTo(Song::class,'song_id');
    }

}
