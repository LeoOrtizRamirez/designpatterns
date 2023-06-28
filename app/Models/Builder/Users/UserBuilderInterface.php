<?php

namespace App\Models\Builder\Users;

interface UserBuilderInterface {
    public function setName($name);
    public function setEmail($email);
    public function setPassword($password);
    public function getUser();
}