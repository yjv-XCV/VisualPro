<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;
use App\Lyric;
use App\Album;
use App\Artist;

class SongbookController extends Controller
{
    //
    public function show()
    {
        $songs = Song::where('archived', false);
    	return view('office.songbook.home',compact('songs'));
    }

    public function create (Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);

        $song = new Song;
        $song->name = $request->name;
        $song->album_id = $request->album_id?$request->album_id:null;
        $song->artist_id = $request->artist_id?$request->artist_id:null;
        $song->save();

        return view('office.songbook.edit', compact('song'))
    }

    public function edit(Request $request)
    {
        $song = Song::where('id', $request->song_id);
    	return view('office.songbook.edit', compact('song'));
    }

    public function addlyric(Request $request)
    {

    }

    public function save(Request $request)
    {

    }

    public function archived()
    {
        $songs = Song::where('archived', false);
    	return view('office.songbook.archived', compact('songs'));
    }

    public function archive(Request $request)
    {
        $songs = Song::where('id', $request->song_id);
        $songs->archived = true?false:true;
        $songs->save();
        return back();
    }

    public function destroy(Request $request)
    {
        $songs = Song::where('id', $request->song_id);
        $songs->lyrics()->delete();
        $songs->delete();

        return back();
    }

    public function newalbum(Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);

        $album = new Album;
        $album->name = $request->name;
        $album->save();

        return back();
    }

    public function newartist(Request $request)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);

        $artist = new Artist;
        $artist->name = $request->name;
        $artist->save();

        return back();
    }

    public function updatealbum(Request $request)
    {
        $album = Album::where('id', $request->album_id);
        $album->name = $request->name;
        $album->save();

        return back();
    }

    public function updateartist(Request $request)
    {
        $artist = Artist::where('id', $request->artist_id);
        $artist->name = $request->name;
        $artist->save();

        return back();

    }
    
    public function deletealbum(Request $request)
    {
        $album = Album::where('id', $request->album_id);
        $album->delete();

        return back();
    }
    
    public function deleteartist(Request $request)
    {
        $artist = Artist::where('id', $request->artist_id);
        $artist->delete();

        return back();
    }
}
