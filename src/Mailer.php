<?php

class Mailer
{
	/**
	 * @param $email
	 * @param $message
	 * @return true
	 */
	public function sendMessage($email, $message)
	{
		sleep(3);
		echo "Send '$message' to '$email'";

		return true;
	}
}