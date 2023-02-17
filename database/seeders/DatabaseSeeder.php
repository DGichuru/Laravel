<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@mail.com',
        //     'website' => 'https:/www.asne.com',
        //     'description' => 'jvjsj jdfjj dkfjd kdfj kfjk
        //     svsvjk dfnvjjsv fdosvov oiofjvisojvsj oisvjoiv
        //     skjvjsv'
        // ]);
        // Listing::create([
        //     'title' => 'Junior Developer',
        //     'tags' => 'laravel javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@mail.com',
        //     'website' => 'https:/www.asne.com',
        //     'description' => 'jvjsj jdfjj dkfjd kdfj kfjk
        //     svsvjk dfnvjjsv fdosvov oiofjvisojvsj oisvjoiv
        //     skjvjsv'

        // ]);


    }
}
