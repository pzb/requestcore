<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	$http = new RequestCore('http://requestcore.googlecode.com/svn/trunk/_tests/test_request.txt');
	$http->send_Request();

	$response = new ResponseCore(
		$http->get_response_header(),
		$http->get_response_body(),
		$http->get_response_code()
	);

	var_dump($response->header['content-length']);
?>

