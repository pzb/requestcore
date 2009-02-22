--TEST--
RequestCore::set_request_class

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->set_useragent('SampleUserAgentString');
	var_dump($http->useragent);
?>

--EXPECT--
string(21) "SampleUserAgentString"
