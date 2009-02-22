--TEST--
RequestCore::HTTP_POST

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	echo HTTP_POST;
?>

--EXPECT--
POST
