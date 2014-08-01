<?php

class Users extends MY_Model {
    
    const DB_TABLE = 'user';
    const DB_TABLE_PK = 'user_id';
    
    
    public $user_id;
    public $username;
    public $name;
    public $email;
    public $password;
    
}