<?php
// Include the library
include('simple_html_dom.php');

$first_name = 'davia';

$f_name = substr($first_name, 0,1);

$last_name = 'holness';
 
 $l_name = substr($last_name, 0, 6);

//TODO: find naming pattern for MDC link query
// if(strlen($last_name) <= 7)
// {
//     $l_name = substr($last_name, 0, 6);

// }
// else {
//     # code...
// }
// Retrieve the DOM from a given URL
$html = file_get_html('http://faculty.mdc.edu/' . $f_name . $l_name);

// Retrieve all images and print their SRCs
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // Find the DIV tag with an id of "myId"
// foreach($html->find('div#myId') as $e)
//     echo $e->innertext . '<br>';

//opening values.json
$file = fopen('mdc_results.html', 'w');
// 'td[width]'
//works for davia and arcides acosta
/*Dumping values to file*/
foreach($html->find('td[colspan=2] && font[face="Verdana, Arial, Helvetica, sans-serif"]') as $e)
// foreach ($html->find('table#AutoNumber19') as $e)
{
  $string = '';
  $string = $e->plaintext;

  echo $string;

  fwrite($file, $string . "\n");
}

// if($string == '')
// {
//   foreach ($html->find('td[width]') as $e)
//       {
//           $string = $e ->plaintext;
//           echo $string;       
//       }
//   }

fclose($file);
// // Find all TD tags with "align=center"
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // Extract all text from a given cell
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>
