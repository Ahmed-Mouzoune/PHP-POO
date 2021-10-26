<?php
class Utilisateur {

    private $firstname;
    private $lastname;
    public $mail;

    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getName() {
        return $this->firstname.' '.$this->lastname;
    }
    public function getMail() {
        return $this->mail;
    }
    public function setMail($mail) {
        $this->mail = $mail;
    }
}