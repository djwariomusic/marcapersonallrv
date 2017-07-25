<?php

namespace Tests\Feature;

use App\Models\Post;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;

class PostTest extends TestCase
{
	use DatabaseTransactions;
	use InteractsWithDatabase;

	/*public function testCanSeeUserPage()
	{
    $users= factory(App\Models\User::class,50)->create();
    $users->each(function(App\Models\User $user) use ($users) {
    $post=factory(App\Models\Post::class)
          ->times(20)
            ->create([
                'user_id' => $user->id,
            ]);
    });
    $response = $this->get('/blog/getPost/'.$post->id);
		$response->assertSee($post->title);
	}*/

}
