<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Lyric;
use App\Album;
use App\Artist;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Song::truncate();
       	Lyric::truncate();
        Album::truncate();
        Artist::truncate();

        $default = [
            'created_at'=> \Carbon\Carbon::now()
        ];

        //Album
        DB::table('albums')->insert(['id' => 1, 'name' => 'Sample Album']);
        //Artist
        DB::table('artists')->insert(['id' => 1, 'name' => 'Sample Artist']);

        // Song
        DB::table('songs')->insert($default + ['id' => 1, 'name' => 'Sample Music', 'album_id' => 1, 'artist_id' => 1]);

        //Lyrics
        DB::table('lyrics')->insert($default + ['id' => 1, 'song_id' => 1, 'zh' => 'Verse 1(Zh)', 'en' => 'Verse 1', 'sequence' => 1, 'label' => 'v1']);
        DB::table('lyrics')->insert($default + ['id' => 2, 'song_id' => 1, 'zh' => 'Chorus 1(Zh)', 'en' => 'Chorus 1', 'sequence' => 2, 'label' => 'c1']);
        DB::table('lyrics')->insert($default + ['id' => 3, 'song_id' => 1, 'zh' => 'Bridge 1(Zh)', 'en' => 'Bridge 1', 'sequence' => 3, 'label' => 'b1']);

    }
}
