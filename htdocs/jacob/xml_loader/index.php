<?php


 

$xml = simplexml_load_file('test.xml');

echo '<pre>';
print_r($xml);


echo $xml ->person[0]-> age;

?>