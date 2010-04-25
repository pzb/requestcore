--TEST--
set_request_url

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore();
	$http->set_request_url('http://github.com/skyzyx/requestcore/raw/master/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->response_info['url']);
?>

--EXPECT--
string(71) "http://github.com/skyzyx/requestcore/raw/master/_tests/test_request.txt"