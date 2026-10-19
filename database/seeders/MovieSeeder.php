<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $movies = [
            ['title' => 'Inception', 'genre' => 'Sci-Fi', 'duration' => 148, 'release_year' => 2010,
             'description' => 'Seorang pencuri yang mencuri rahasia lewat mimpi mendapat tugas terakhir: menanamkan sebuah ide ke dalam pikiran target.',
             'poster' => 'inception.jpg.jpeg'],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'duration' => 152, 'release_year' => 2008,
             'description' => 'Batman menghadapi Joker, penjahat kacau yang menguji batas moral Gotham dan para pelindungnya.',
             'poster' => 'the-dark-knight.jpg.jpeg'],
            ['title' => 'Interstellar', 'genre' => 'Sci-Fi', 'duration' => 169, 'release_year' => 2014,
             'description' => 'Sekelompok astronot menembus lubang cacing demi mencari planet baru bagi umat manusia yang terancam punah.',
             'poster' => 'interstellar.jpg.jpeg'],
            ['title' => 'Parasite', 'genre' => 'Thriller', 'duration' => 132, 'release_year' => 2019,
             'description' => 'Keluarga miskin menyusup ke kehidupan keluarga kaya, hingga rahasia tersembunyi mengubah segalanya.',
             'poster' => 'parasite.jpg.jpeg'],
            ['title' => 'Spirited Away', 'genre' => 'Animation', 'duration' => 125, 'release_year' => 2001,
             'description' => 'Chihiro terjebak di dunia roh dan harus bekerja di pemandian untuk menyelamatkan kedua orang tuanya.',
             'poster' => 'spirited-away.jpg.jpeg'],
            ['title' => 'Avengers: Endgame', 'genre' => 'Action', 'duration' => 181, 'release_year' => 2019,
             'description' => 'Para Avengers yang tersisa berjuang membalikkan kehancuran akibat Thanos dalam pertarungan terakhir.',
             'poster' => 'avengers-endgame.jpg.jpeg'],
            ['title' => 'Your Name', 'genre' => 'Romance', 'duration' => 106, 'release_year' => 2016,
             'description' => 'Dua remaja yang saling bertukar tubuh secara misterius berusaha saling menemukan satu sama lain.',
             'poster' => 'your-name.jpg.jpeg'],
            ['title' => 'Joker', 'genre' => 'Drama', 'duration' => 122, 'release_year' => 2019,
             'description' => 'Arthur Fleck, komedian gagal yang terpinggirkan, perlahan berubah menjadi sosok kriminal ikonik.',
             'poster' => 'joker.jpg.jpeg'],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
