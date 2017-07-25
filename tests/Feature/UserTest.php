<?php

namespace Tests\Feature;

use App\User;
use App\Message;

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
	public function testCanMessageContact()
	{
		$message = factory(Message::class)->create();
		$response = $this->post('/contactar', [
			'name' => $message->name,
			'telephone' => $message->telephone,
			'email' => $message->email,
			'description' => $message->description,
			'message' => $message->message,
		]);
	}
}
