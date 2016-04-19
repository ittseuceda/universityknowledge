<?php
//TODO: implement algorithm that searches for previous institution work
//http://faculty.mdc.edu/bgonzal7/
//link that does not change
$precision = '5';
$prec_int = intval($precision);

$default_string = 'https://www.googleapis.com/customsearch/v1?key=';

// key and engine ID's
$keyID = 'AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM';
$engineID = '000474850362420949879:o5cf66syyny';
// $engineID = '017576662512468239146:omuauf_lfve';

//query values
$first_name = 'Peters';
$last_name = 'Faith';
$query =  $first_name . '+' . $last_name; //add '+' . "education" later

// total link value
$total = $default_string . $keyID . '&cx=' . $engineID . '&q=' . $query . '&num=' . $precision;

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

$string = file_get_contents("results.json");
$json_a=json_decode($string,true);
// $json_a = json_encode($json_a, JSON_PRETTY_PRINT);

//
// for($i =0;$i < $prec_int;$i++)
// {
//   $string = $json_a['items'][$i]['snippet'];
//   echo $string;
// }
//opening values.json
$file = fopen('values.json', 'w');

//displaying to terminal
for($i =0;$i < $prec_int;$i++)
{
  $string = $json_a['items'][$i]['snippet'];
  echo $string;
}

//writing to file
for($i =0;$i < $prec_int;$i++)
{
  $string = $json_a['items'][$i]['snippet'];
  fwrite($file, $string);
}
//close values.json
fclose($file);
// $fh = fopen( 'results.json', 'w+');
// fclose($fh);
//
// $file = fopen('values.json', 'w');
// fclose($file);
?>
