<?php
class Utilisateur {

    private $id;
    private $firstname;
    private $lastname;
    private $mail;

    public function __construct($id, $firstname, $lastname, $mail) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->mail = $mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }
    public function getMail() {
        return $this->mail;
    }
    public function getName() {
        return $this->firstname.' '.$this->lastname;
    }
    public function getFirstName() {
        return $this->firstname;
    }
    public function getLastName() {
        return $this->lastname;
    }
}