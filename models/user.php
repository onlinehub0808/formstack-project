<?php

class User
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createUser($email, $firstName, $lastName, $password)
    {
        $this->db->insert("users", [
            "emailAddress" => $email,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "password" => $password,
        ]);

        return $this->db->id();
    }

    //returns an array of user data
    public function findUser($id)
    {
        $user = $this->db->get("users", [
            "emailAddress",
            "firstName",
            "lastName",
            "password",
        ], [
            "id[=]" => $id,
        ]);

        return $user;
    }

    //returns the amount of rows affected
    public function updateUser($id, $email, $firstName, $lastName, $password)
    {
        $updatedUser = $this->db->update("users", [
            "emailAddress" => $email,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "password" => $password,
        ], [
            "id[=]" => $id,
        ]);

        return $updatedUser->rowCount();
    }
}
