--TEST--
RequestCore::send_request2

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore();
	$http->set_request_url('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$response = $http->send_request(true);
	var_dump($response->body);
?>

--EXPECT--
string(48) "abcdefghijklmnopqrstuvwxyz
0123456789
!@#$%^&*()"
