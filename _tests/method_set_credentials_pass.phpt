--TEST--
RequestCore::proxy

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->set_credentials('user', 'pass');
	var_dump($http->password);
?>

--EXPECT--
string(4) "pass"
