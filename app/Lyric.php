<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\Configuration;

class Lyric extends Model
{
    //
    protected $table = 'lyrics';
    
    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function configuration()
    {
    	return $this->belongsTo(Configuration::class, 'configuration_id');
    }
}
