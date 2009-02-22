--TEST--
RequestCore::HTTP_PUT

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	echo HTTP_PUT;
?>

--EXPECT--
PUT
