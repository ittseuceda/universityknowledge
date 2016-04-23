<?php
// Include the library
include('simple_html_dom.php');

$first_name = 'Martin';
$last_name = 'Tracey';

// Retrieve the DOM from a given URL
$html = file_get_html('http://phonebook.fiu.edu/?q=' . $first_name . '+' 
                        . $last_name . '&go=Search&axis=employee');

// Retrieve all images and print their SRCs
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // Find the DIV tag with an id of "myId"
// foreach($html->find('div#myId') as $e)
//     echo $e->innertext . '<br>';

//opening values.json
$file = fopen('fiu.html', 'w');

/*Dumping values to file*/
foreach ($html->find('legend') as $e)
{
  $string = $e->innertext;
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.email') as $e)
{
  $string = $e->innertext;
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.business') as $e)
{
  $string = $e->innertext;
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.department') as $e)
{
  $string = $e->innertext;
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.title') as $e)

{
  $string = $e->innertext;
  fwrite($file, $string . "\n");
}

fclose($file);
// // Find all TD tags with "align=center"
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // Extract all text from a given cell
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>
