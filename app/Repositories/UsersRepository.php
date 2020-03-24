<?php

class UsersRepository
{
    public static function getUserByEmail(string $email): ?User
    {
        $query = DB::$connection->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute(['email' => $email]);

        $user = $query->fetchObject('User');

        if ($user) {
            return $user;
        }

        return null;
    }


    public static function getUserById(string $id): ?string
    {
        $query = DB::$connection->prepare("SELECT * FROM users WHERE id = :id");
        $query->execute(['id' => $id]);

        $user = $query->fetchObject('User');

        if ($user) {
            return $user->first_name . " " . $user->last_name ;
        }

        return null;
    }

    public static function createUser(array $data): void
    {
        $query = DB::$connection->prepare("INSERT INTO users SET email = :email, first_name = :firstName, last_name = :lastName, password = :password");
        $query->execute([
            'email' => $data['email'],
            'firstName' => $data['first-name'],
            'lastName' => $data['last-name'],
            'password' => ($data['password']),
        ]);
    }

    public static function getUserByEmailAndPassword(string $email, string $password): ?User
    {
        $query = DB::$connection->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $query->execute([
            'email' => $email,
            'password' => $password
        ]);

        $user = $query->fetchObject('User');
        if (!$user) {
            return null;
        }

        return $user;
    }
}