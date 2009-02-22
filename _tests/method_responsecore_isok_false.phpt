--TEST--
ResponseCore::isOK

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_Request();

	$response = new ResponseCore(
		$http->get_response_header(),
		$http->get_response_body(),
		999
	);

	var_dump($response->isOK());
?>

--EXPECT--
bool(false)
