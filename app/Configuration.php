<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Configuration extends Model
{
    //
    protected $table = 'configurations';
    
    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }


}