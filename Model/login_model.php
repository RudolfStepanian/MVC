<?php

class login_model extends Model {
    public function __construct(){
        parent::__construct();
    }

    public function run(){
        $sth = $this->db->prepare("SELECT id FROM users 
                                    WHERE login = :login
                                    AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

        $count = $sth->rowCount();
        if ($count > 0){

        } else {

        }
    }
}