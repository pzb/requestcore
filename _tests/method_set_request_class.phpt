--TEST--
RequestCore::set_request_class

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt', null, array(
		'request' => 'TestRequestClass'
	));
	var_dump($http->request_class);
?>

--EXPECT--
string(16) "TestRequestClass"
