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
      //factory(startup\User::class, 1)->states('dev@astromap')->create();
      factory(startup\User::class, 10)->create()->each(
        function($user){
          $user->startup()->save(factory(startup\Startup::class)->make());
        }
      );
    }
}
