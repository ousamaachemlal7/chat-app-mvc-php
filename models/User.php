<?php

namespace Models;

use Provider\Database;


class User extends Database
{
    public function getAllusers(){
        $this->query('SELECT * FROM user');
        $data = $this->resultSet();

        return $data;
    }

    public function getEmail($valueId){
        $this->query('SELECT email FROM user WHERE id_user=:idUser');
        $this->bind(':idUser',$valueId);
        $result = $this->single();
        return $result;
    }

    public function insertUser($idUser,$fName,$lName,$pwd,$connected,$avatar,$email){
        $this->query('INSERT INTO user VALUES (id_user=:idUser, first_name=:fName,last_name=:lName,password=:pwd,is_connected=:connected,avatar=:avatar,email=:email )');
        $this->bind(':idUser',$idUser);
        $this->bind(':idUser',$idUser);
        $this->bind(':idUser',$idUser);
        $this->bind(':idUser',$idUser);
        $this->bind(':idUser',$idUser);
    }
}