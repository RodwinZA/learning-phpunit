<?php

class User
{
	public $first_name;
	public $surname;

	public $email;

    // Injecting the Mailer dependency
    private Mailer $mailer;


//    We can inject the dependency in a setter or in a constructor
    public function setMailer(Mailer $mailer): void
    {
        $this->mailer = $mailer;
    }

	public function getFullName(): string
	{
		return trim("$this->first_name $this->surname");
	}

	public function notify($message): true
    {
        // Note here we have removed the Mailer object previously created
		return $this->mailer->sendMessage($this->email, $message);
	}
}