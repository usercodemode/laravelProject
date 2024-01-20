<?php

namespace Database\Seeders;
use App\Models\Listing;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
          'name' => 'John Doe',
          'email' => 'john@gmail.com'
        ]);
        
        Listing::factory(6)->create([
          'user_id' => $user->id
        ]);
        
        // Listing::create([
//             'title' => 'Laravel Senior Developer',
//             'tags' => 'Laravel, Javascript',
//             'company' => 'Acme Corp',
//             'location' => 'Boston, MA',
//             'email' => 'email@email.com',
//             'website' => 'https://acme.com',
//             'description' => 'Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, dolorem.'
//         ]);
        
        // Listing::create([
//             'title' => 'Fullstack Developer',
//             'tags' => 'Laravel, Backend, Api',
//             'company' => 'Stark Industries ',
//             'location' => 'New York, NY',
//             'email' => 'email@email.com',
//             'website' => 'https://starkindustries.com',
//             'description' => 'Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, dolorem.'
//         ]);
        
        
        
         //\App\Models\User::factory(5)->create();
         
         //Listing::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
