<?php

namespace App\Models\UsersModel;
use \PDO;

function findAll(PDO $connexion){
    $sql = 'SELECT * FROM users ORDER BY created_at ASC';
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function create($connexion, $data){
    $sql = "INSERT INTO users SET
            firstname = :firstname, lastname = :lastname, email= :email, password= :password, created_at= NOW()";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(":firstname", $data['firstname'], PDO::PARAM_STR);
    $rs->bindValue(":lastname", $data['lastname'], PDO::PARAM_STR);
    $rs->bindValue(":email", $data['email'], PDO::PARAM_STR);
    $rs->bindValue(":password", $data['password'], PDO::PARAM_STR);
    return $rs->execute();
}