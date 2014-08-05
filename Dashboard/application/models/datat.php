<?php

class DataT extends MY_Model {
    
    const DB_TABLE = 'data';
    const DB_TABLE_PK = 'data_id';
    
    
    public $data_id;
    public $name;
    public $tel;
    public $address;
    public $city;
	public $zipcode;
	public $email;
	public $interest;
	public $havesystem;
	public $cdate;
	public $datauserid;
    public $rate;
	public $systemquote;
}