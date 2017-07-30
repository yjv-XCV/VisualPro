<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lyric;
use App\Configuration;

class Project extends Model
{
    //
    protected $table = 'projects';

    public function configurations()
    {
        return $this->hasMany(Configuration::class,'project_id');
    }

    public function lyrics()
    {
    	return $this->hasMany(Lyric::class, 'project_id');
    }
}
