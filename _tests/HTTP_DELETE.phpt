--TEST--
RequestCore::HTTP_DELETE

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	echo HTTP_DELETE;
?>

--EXPECT--
DELETE
