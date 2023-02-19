<?php

$products = array(
  'eggs' => array('balade', 'mazere3'),
  'milk' => array('Fresh', 'Taanayel'),
  'water-pack' => array('Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of " . $products['eggs'][0] . " eggs and 3 " . $products['water-pack'][1] . " Water Pack.";

?>