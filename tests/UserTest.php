<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testReturnsFullName()
	{
		$user = new User;

		$user->first_name = "Teresa";
		$user->surname = "Green";

		$this->assertEquals("Teresa Green", $user->getFullName());
	}

	public function testFullNameIsEmptyByDefault()
	{
		$user = new User;

		$this->assertEquals("", $user->getFullName());
	}

	/*
	 * @test
	 */
	public function user_has_firstname()
	{
		$user = new User;

		$user->first_name = "Teresa";

		$this->assertEquals("Teresa", $user->first_name);
	}

	public function testNotificationIsSent()
	{
		$user = new User;

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}
}