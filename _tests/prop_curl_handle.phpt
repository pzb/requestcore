--TEST--
RequestCore::curl_handle

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_request();
	var_dump($http->curl_handle);
?>

--EXPECT--
resource(5) of type (Unknown)
