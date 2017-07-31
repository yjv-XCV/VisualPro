<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lyric;
use App\Project;
use App\Album;
use App\Artist;

class Song extends Model
{
    //
    protected $table = 'songs';
    
    public function lyrics()
    {
    	return $this->hasMany(Lyric::class, 'song_id');
    }
 	
 	public function projects()
    {
    	return $this->belongsToMany(Project::class, 'project_song', 'song_id', 'project_id');
    }

    public function album()
    {
    	return $this->belongsTo(Album::class, 'album_id');
    }

    public function artist()
    {
    	return $this->belongsTo(Artist::class, 'artist_id');
    }

}
