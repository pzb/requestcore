--TEST--
get_response_header

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://github.com/skyzyx/requestcore/raw/master/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->get_response_header('content-type'));
?>

--EXPECT--
string(25) "text/plain; charset=utf-8"
