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

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testNotificationIsSent()
	{
		$user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('dave@example.com'), $this->equalTo('Hello'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);

		$user->email = 'dave@example.com';

		$this->assertTrue($user->notify('Hello'));
	}

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->onlyMethods([])
                            ->getMock();

        $user->setMailer($mock_mailer);

        // We haven't set the email address seo we expect an
        // exception to be thrown
        $this->expectException(Exception::class);

        $user->notify("Hello");
    }
}