--TEST--
RequestCore::response_headers::url

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->response_headers['_info']['url']);
?>

--EXPECT--
string(67) "http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt"
