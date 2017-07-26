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
      $users= factory(App\User::class,10)->create();

      $users->each(function(App\User $user) use ($users) {
          factory(App\Models\Post::class)
            ->times(20)
              ->create([
                  'user_id' => $user->id,
              ]);


      });
    }
}
