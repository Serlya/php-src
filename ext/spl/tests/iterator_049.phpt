--TEST--
SPL: ArrayIterator with NULL key
--FILE--
<?php

$ar = new ArrayIterator(array(NULL=>NULL));
@var_dump($ar);
var_dump($ar->getArrayCopy());

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
object(ArrayIterator)#%d (1) {
  ["storage":"ArrayIterator":private]=>
  array(1) {
    [""]=>
    NULL
  }
}
array(1) {
  [""]=>
  NULL
}
===DONE===
--UEXPECTF--
object(ArrayIterator)#%d (1) {
  [u"storage":u"ArrayIterator":private]=>
  array(1) {
    [u""]=>
    NULL
  }
}
array(1) {
  [u""]=>
  NULL
}
===DONE===
