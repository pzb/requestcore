--TEST--
RequestCore::response_headers::content_type

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->response_headers['_info']['content_type']);
?>

--EXPECT--
string(10) "text/plain"
