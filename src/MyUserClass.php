<?php
namespace App;

class MyUserClass
{
	public function getUserList()
	{
		$dbconn = new DatabaseConnection('localhost','user','password');//localhost','user','password
		$results = $dbconn->query('select name from user');
		sort($results);
		return $results;
	}
}