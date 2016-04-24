<?php
// Include the library
include('simple_html_dom.php');


$first_name = 'ruz';

$f_name = substr($first_name, 0,1);

$last_name = 'allonce';

$l_name = substr($last_name, 0, 7);

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

/*Dumping values to file*/
foreach ($html->find('table#AutoNumber19') as $e)
{
  $string = '';
  $string = $e->plaintext;
  if($string == '')
  {
      foreach ($html->find('td[colspan="2"]') as $e)
      {
          $string = $e ->plaintext;
          echo $string;
          
      }
  }
  fwrite($file, $string . "\n");
}

fclose($file);
// // Find all TD tags with "align=center"
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // Extract all text from a given cell
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>
