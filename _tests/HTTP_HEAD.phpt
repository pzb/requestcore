--TEST--
RequestCore::HTTP_HEAD

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	echo HTTP_HEAD;
?>

--EXPECT--
HEAD
