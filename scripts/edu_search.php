<?php
/*this has been decrecated due to Google Custom Search engine being inconsistent at times*/
/*Using Google Custom Search Engine ~ Searches for educational background*/

//http://faculty.mdc.edu/bgonzal7/
//link that does not change
$precision = '5';
$prec_int = intval($precision);

$default_string = 'https://www.googleapis.com/customsearch/v1?key=';

// key and engine ID's
$keyID = 'AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM';
//MDC ID
$engineID = '009123266734325814312:tocwhdtadbm';

//FIU's engine Id
// $engineID = '009123266734325814312:p6yseolqs0c'
// best one
// $engineID = '000474850362420949879:o5cf66syyny';

//FOR SEARCHING INSTITUTIONS
// --------------------------
$first_name = 'Belarmino';
$last_name = 'Gonzales';
// $combined_name =  $last_name . $first_name . '+educational+background+';

//FOR SEARCHING INSTITUTIONS
// ------------------------------------------
$query =  $last_name . '+' . $first_name . '+educational+background+';

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

//opening values.json
$file = fopen('values.json', 'w');

//displaying to terminal
for($i = 0;$i < $prec_int;$i++)
{
  // $string = $json_a['items'][$i]['snippet'];
  $string = $json_a['items'][$i]['snippet'];
  echo $string;
}

// writing to file
for($i = 0;$i < $prec_int;$i++)
{
  $string = $json_a['items'][$i]['snippet'];
  fwrite($file, $string);
}

// fclose($file);


// echo $line;
// echo $dude;
// while (!feof($file)) 
// {
//   $line_of_text = fgets($file); 
//   echo $line_of_text;

// }

// //close values.json
// //close 
// // fclose($fp);

// // TODO: close files when done debugging
// $fh = fopen( 'results.json', 'w+');
// fclose($fh);

// $file = fopen('values.json', 'w');
// fclose($file);
?>
