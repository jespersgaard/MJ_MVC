<?php
/**
 * 
 */
 ob_start();
class Auth
{
    
    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: ' . URL . 'welcome');
            exit;
		}
	}
}