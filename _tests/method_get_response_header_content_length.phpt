--TEST--
ResponseCore::get_response_header

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->get_response_header('content-length'));
?>

--EXPECT--
string(2) "48"
