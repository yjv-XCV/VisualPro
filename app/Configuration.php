<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lyric;
use App\Project;

class Configuration extends Model
{
    //
    protected $table = 'configurations';
    
    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function lyrics()
    {
    	return $this->hasMany(Lyric::class, 'configuration_id');
    }
}
