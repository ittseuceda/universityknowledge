<?php
/*Using Google Custom Search Engine ~ Searches for email and phone number*/

//http://faculty.mdc.edu/bgonzal7/
//link that does not change
$precision = '6';
$prec_int = intval($precision);

$default_string = 'https://www.googleapis.com/customsearch/v1?key=';

// key and engine ID's
$keyID = 'AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM';
//this one
$engineID = '009123266734325814312:tocwhdtadbm';
// $engineID = '000474850362420949879:o5cf66syyny';

//query values
$first_name = 'Davia';
$last_name = 'Holness';

//FOR SEARCHING INSTITUTIONS
// --------------------------
// $first_name = 'Alvio';
// $last_name = 'Dominguez+educational+background+';

$query =  $first_name . '+' . $last_name . '+'; //add '+' . "education" later

//FOR SEARCHING INSTITUTIONS
// ------------------------------------------
// $query =  $last_name . '+' . $first_name; //add '+' . "education" later


// total link value
// $total = $default_string . $keyID . '&cx=' . $engineID . '&q=' . $query . '&num=' . $precision;
$total = $default_string . $keyID . '&cx=' . $engineID . '&q=' . $query . '&num=' . $precision;

$result = file_get_contents($total);

// $obj = json_decode($result, true);
// //json encode the $obj with pretty print
// $obj = json_encode($obj, JSON_PRETTY_PRINT);

//open file
$fp = fopen('results.json', 'w');
//write file
fwrite($fp, $result);
//close file
fclose($fp);

$string = file_get_contents("results.json");
$json_a=json_decode($string,true);

//opening values.json
$file = fopen('values.txt', 'w');

//displaying to terminal
for($i = 0;$i < $prec_int;$i++)
{
  $string = $json_a['items'][$i]['snippet'];
  echo $string;
}

//writing to file
for($i = 0;$i < $prec_int;$i++)
{
  $string = $json_a['items'][$i]['snippet'];
  fwrite($file, $string);
}
//close values.json
fclose($file);
//TODO: close files when done debugging
// $fh = fopen( 'results.json', 'w+');
// fclose($fh);
//
// $file = fopen('values.json', 'w');
// fclose($file);

// What to look for
$search = '@mdc.edu';
// Read from file
$lines = file('values.txt');

// foreach($lines as $line)
// {
//   $line = file_get_contents('http://faculty.mdc.edu/dholnes/');
//   // Check if the line contains the string we're looking for, and print if it does
//   if(strpos($line, $search) !== false)
//     echo $line;
// }
?>
