<?php

//link that does not change
$default_string = 'https://www.googleapis.com/customsearch/v1?key=';

// key and engine ID's
$keyID = 'AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM';
$engineID = '000474850362420949879:o5cf66syyny';

//query values
$first_name = 'Alvio';
$last_name = 'Dominguez';
$query =  $first_name . '+' . $last_name;

// total link value
$total = $default_string . $keyID . '&cx=' . $engineID . '&q=' . $query;

$result = file_get_contents($total);
$obj = json_decode($result, true);

//json encode the $obj with pretty print
$obj = json_encode($obj, JSON_PRETTY_PRINT);

//open file
$fp = fopen('results.json', 'w');
//write file
fwrite($fp, $obj);

//close file
fclose($fp);

?>
