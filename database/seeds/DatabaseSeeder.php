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
      $users= factory(App\Models\User::class,50)->create();

      $users->each(function(App\Models\User $user) use ($users) {
          factory(App\Models\Post::class)
            ->times(20)
              ->create([
                  'user_id' => $user->id,
              ]);


      });
    }
}
