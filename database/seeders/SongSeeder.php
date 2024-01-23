<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'album_id' => 1,
            'name' => 'Pillars'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'Roses in Water'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'Every Shining Time You Arrive'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'Two Promises'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => '100 Million'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'How It Feels to Be Something On'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'The Prophet'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'Guitar and Video Games'
        ]);
        Song::create([
            'album_id' => 1,
            'name' => "The Shark's Own Private Fuck"
        ]);
        Song::create([
            'album_id' => 1,
            'name' => 'Days Were Golden'
        ]);
    }
}
