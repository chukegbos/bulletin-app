<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Post::class, 20)->create();
       //factory(App\Gallery::class, 10)->create();
       //factory(App\Product::class, 20)->create();
        //factory(App\Service::class, 6)->create();
        factory(App\Event::class, 20)->create();
    }
}
