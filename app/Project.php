<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Configuration;
use App\Song;

class Project extends Model
{
    //
    protected $table = 'projects';

    public function configurations()
    {
        return $this->hasMany(Configuration::class, 'project_id');
    }

    public function songs()
    {
    	return $this->belongsToMany(Song::class, 'projects_songs', 'project_id', 'song_id');
    }

    
}
