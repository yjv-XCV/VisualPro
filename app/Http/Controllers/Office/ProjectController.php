<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;
use App\Project;
use App\Configuration;
use App\Lyric;


class ProjectController extends Controller
{
    //
    public function show()
    {
        $projects = Project::where('archived', false)->get();
    	return view('office.home',compact('projects'));
    }

    public function create (Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);

        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        $configuration = new Configuration;
        $configuration->name = 'default_configuration';
        $configuration->project_id = $project->id;
        $configuration->save();

        return redirect('/office');
    }

    public function edit(Request $request)
    {
        if($request->projectID){
            $project = Project::where('id', $request->projectID)->first();
            $configurations = $project->configurations;
            $songs = $project->songs();
        	return view('office.edit',compact('project','configurations','songs'));
        }
        else{
            return back();
        }
    }

    public function newconfig(Request $request)
    {
        $project = Project::where('id', $request->projectID)->first();
        $configuration = new Configuration;
        $configuration->name = $request->name;
        $configuration->project_id = $project->id;
        $configuration->save();

        return back();
    }

    public function save(Request $request)
    {
        $project = Project::where('id', $request->projectID)->first();
        if($request->has('configurationID')){
            $configuration = Configuration::where('id', $request->configurationID)->first();
            $configuration->y_offset = $request->y_offset;
            $configuration->font = $request->font;
            $configuration->font_size = $request->font_size;
            $configuration->font_color = $request->font_color;
            $configuration->font_style = $request->font_style;
            $configuration->text_aligned = $request->text_aligned;
            $configuration->save();
        }
        return back();
    }

    public function archieved()
    {
        $project = Project::where('archived', true)->get();
    	return view('office.archived',compact('project'));
    }

    public function archive(Request $request)
    {
        $project = Project::where('id', $request->projectID)->first();
        $project->archived = true?false:true;
        $project->save();
        return back();
    }

    public function destroy(Request $request){
        $project = Project::where('id', $request->projectID)->first();
        $project->configurations()->delete();
        $project->delete();
        return back();
    }
}
