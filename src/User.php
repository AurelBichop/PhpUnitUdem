<?php

/**
 * User
 * 
 * A user of the system
 */
class User
{

    /**
     * First name
     * @var string
     */
    public $first_name;


    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Email adresse
     * @var string
     */
    public $email;

    /**
     * Mailer Object
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * Set the Mailer
     *
     * @param Mailer $mailer
     * @return void
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }


    /**
     * Get the user's full name from their first name and surname
     *
     * @return string
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    /**
     * Send the user a message
     *
     * @param string $message
     * @return boolean True if sent, false otherwise
     */
    public function notify($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}
