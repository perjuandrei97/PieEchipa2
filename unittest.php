<?php

include 'test.php';

use PHPunit\Framework\TestCase;

class LoginLogoutTest extends TestCase
{
	public function testLoginCorrect()
	{
		global $servername, $username, $password, $myDB, $SESSION;
		$SESSION['loggedIN']="false";
		
		$result = login($servername,
					$username,
					$password,
					$myDB,
					"cc", "cc");
		
		$this->assertTrue($result);
	}
	
	public function testLoginWrong()
	{
		global $servername, $username, $password, $myDB, $SESSION;
		$SESSION['loggedIN']="false";
		
		$result = login($servername,
					$username,
					$password,
					$myDB,
					"wrong_user", "wrong_password");
		
		$this->assertFalse($result);
	}
}

?>