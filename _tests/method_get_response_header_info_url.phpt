--TEST--
ResponseCore::get_response_header

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_request();
	$info = $http->get_response_header('_info');
	var_dump($info['url']);
?>

--EXPECT--
string(67) "http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt"
