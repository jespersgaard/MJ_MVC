<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT * FROM user WHERE 
                login = :login AND password = :password");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            Session::set('login', $data['login']);		
            Session::set('profilepic', $data['profilepic']);			
            header('location: ../index');
        } else {
            header('location: ../login');
        }
    }
	public function createaccount($data)
	{
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'email' => $data['email'],
			'skype' => $data['skype'],
			'telefonnr' => $data['telefonnr'],			
			'role' => 'Default'
		));
	}

}