<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lyric;
use App\Project;

class Song extends Model
{
    //
    public function lyrics()
    {
    	return $this->hasMany(Lyric::class, 'lyric_id');
    }
 	
 	public function projects()
    {
    	return $this->belongsToMany(Project::class,'project_song','song_id','project_id');
    }

}
