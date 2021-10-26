<?php
class Utilisateur {

    private $firstname;
    private $lastname;
    private $mail;

    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getName() {
        return $this->firstname.' '.$this->lastname;
    }
}