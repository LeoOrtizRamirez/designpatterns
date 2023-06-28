<?php

namespace App\Models\Builder\Users;

class UserBuilder implements UserBuilderInterface {
    private $user;

    public function __construct() {
        $this->user = new User("", "", 0);
    }

    public function setName($name) {
        $this->user->name = $name;
    }

    public function setEmail($email) {
        $this->user->email = $email;
    }

    public function setPassword($password) {
        $this->user->password = bcrypt($password);
    }

    public function getUser() {
        return $this->user;
    }
}