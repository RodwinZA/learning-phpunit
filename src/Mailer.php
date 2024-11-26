<?php

class Mailer
{
    /**
     * @param $email
     * @param $message
     * @return true
     * @throws Exception
     */

	public function sendMessage($email, $message): true
    {
        if (empty($email))
        {
            throw new Exception();
        }

		sleep(3);
		echo "Send '$message' to '$email'";

		return true;
	}
}