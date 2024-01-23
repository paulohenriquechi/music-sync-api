<?php

namespace Database\Seeders;

use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::create([
            'artist_id' => 1,
            'name' => 'How It Feels to Be Something On',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/79174f6bc75e46be8506ab3baea0e6a7.jpg#79174f6bc75e46be8506ab3baea0e6a7'
        ]);
        Album::create([
            'artist_id' => 2,
            'name' => 'Dirt',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/35bc4e8dc7345bed22e3763b4ac98efe.jpg#35bc4e8dc7345bed22e3763b4ac98efe'
        ]);
        Album::create([
            'artist_id' => 3,
            'name' => 'Violator',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/0d14c118cdc8900749d7584193adaf8a.jpg#0d14c118cdc8900749d7584193adaf8a'
        ]);
        Album::create([
            'artist_id' => 4,
            'name' => 'Damnation',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/c974cc0caf0beec33bdb9f9392683d30.jpg#c974cc0caf0beec33bdb9f9392683d30'
        ]);
        Album::create([
            'artist_id' => 5,
            'name' => 'darker than darkness style 93',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/0496c9212be3e3788d213272a58905dd.jpg#0496c9212be3e3788d213272a58905dd'
        ]);
        Album::create([
            'artist_id' => 6,
            'name' => 'Diamond Eyes',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/858efffdf737c869e754c2f4dbe89f4c.jpg#858efffdf737c869e754c2f4dbe89f4c'
        ]);
        Album::create([
            'artist_id' => 7,
            'name' => 'The Sound of Perseverance',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/082a2dac762aed6e9f518f866dbed155.jpg#082a2dac762aed6e9f518f866dbed155'
        ]);
        Album::create([
            'artist_id' => 8,
            'name' => 'Icedancer',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/182f57b294c9bd06a9283b67b81469fc.jpg#182f57b294c9bd06a9283b67b81469fc'
        ]);
        Album::create([
            'artist_id' => 9,
            'name' => 'Unknown Pleasures',
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/0c6c868b77a4417f937cf09506099081.jpg#0c6c868b77a4417f937cf09506099081'
        ]);
        Album::create([
            'artist_id' => 10,
            'name' => "Storm of the Light's Bane",
            'release_date' => Carbon::now(),
            'cover' => 'https://lastfm.freetls.fastly.net/i/u/770x0/aae45461b746bab9bf69ac08438bc4e2.jpg#aae45461b746bab9bf69ac08438bc4e2'
        ]);
    }
}
