--TEST--
tidyNode::__construct()
--SKIPIF--
<?php
  if (!extension_loaded('tidy')) die ('skip tidy not present');
?>
--FILE--
<?php
new tidyNode;
?>
--EXPECTF--
Fatal error: Call to private tidyNode::__construct() from invalid context in %s on line %d
