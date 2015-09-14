<?php

interface iName {

    public function setName($firstName, $lastName);

    public function getName($user);
}

interface iEmail {

    public function setEmail($email);

    public function getName($user);
}

interface iPassword {

    public function setPassword($asdf);

    public function getPassword($user);
}

class Users implements iName, iEmail, iPassword {

    public function setName($firstName, $lastName) {
        echo $firstName;
        echo $lastName;
    }

    public function getName($user) {
        return $user->name;
    }
    
    public function setEmail($email) {
        echo $email;
    }

    public function getEmail($user) {
        return $user->email;
    }
    
    public function setPassword($password) {
        echo $password;
    }

    public function getPassword($user) {
        return $user->password;
    }

}
