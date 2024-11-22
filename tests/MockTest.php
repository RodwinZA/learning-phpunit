<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testMock()
	{
		$mock = $this->createMock(Mailer::class);

		$mock->method('sendMessage')
			->willReturn(true);

		$result = $mock->sendMessage('dave@example.com', 'Hello');

		$this->assertTrue($result);
	}
}