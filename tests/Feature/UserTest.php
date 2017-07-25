<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;

class UsersTest extends TestCase
{
	use DatabaseTransactions;
	use InteractsWithDatabase;

  public function testCanLogin()
	{
		$user = factory(User::class)->create();

		$response = $this->post('/login', [
			'email' => $user->email,
			'password' => 'secret',
		]);

		$this->seeIsAuthenticatedAs($user);
	}

}
