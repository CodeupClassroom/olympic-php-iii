<?php
	
public class User() {
	$username = "admin";
	$password = "password";

	function isAdmin() {
		if($this->username == "admin") {
			return true;
		} else {
			return false;
		}
	}

	function attemptLogin($username, $password) {
		if($this->username == $username && $this->password == $password) {
			return true;
		} else {
			return false;
		}
	}
}


