<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author deezzel
 */
final class Users {

    /** @var int */
    private $id;

    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /** @var DateTime */
    private $register_date;

    /** @var string */
    private $email;

    /** @var string */
    private $name;

    /** @var string */
    private $surname;

    /** @var string */
    private $phone;

    /** @var string */
    private $role;

    //roles
    const ROLE_USER = "USER";
    const ROLE_ADMIN = "ADMIN";
    const ROLE_MODER = "MODER";

    public function __construct() {
        
    }

    public static function allRoles() {
        return array(
            self::ROLE_ADMIN,
            self::ROLE_MODER,
            self::ROLE_USER
        );
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if (null !== $this->id && $this->id != $id) {
            throw new Exception('Cannot change identifier to ' . $id . ', already set to ' . $this->id);
        }
        $this->id = (int) $id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRegister_date() {
        return $this->register_date;
    }

    public function setRegister_date(DateTime $register_date) {
        $this->register_date = $register_date;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        UserValidator::validateRole($role);
        $this->role = $role;
    }

}
