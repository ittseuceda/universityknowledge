<?php
// Include the library
include('simple_html_dom.php');


$first_name = 'Lindsay';
$last_name = 'Malloy';

// Retrieve the DOM from a given URL
$html = file_get_html('http://phonebook.fiu.edu/?q=' . $first_name . 
                      '+' . $last_name . '&go=Search&axis=employee');

// Retrieve all images and print their SRCs
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // Find the DIV tag with an id of "myId"
// foreach($html->find('div#myId') as $e)
//     echo $e->innertext . '<br>';

//opening values.json
$file = fopen('fiu_results.json', 'w');

/*Dumping values to file*/
// foreach ($html->find('legend') as $e)
// {
//   $string = $e->plaintext;
//   echo $string;
//   fwrite($file, $string . "\n");
// }

fwrite($file, '"firstName":' . '"' . $first_name . '"' . "\n");
fwrite($file, '"lastName":' . '"' . $last_name . '"' . "\n");


foreach ($html->find('tr.email') as $e)
{
  $string = $e->plaintext;
  //json formatting
  $string = '"email":' . '"' . substr($string, 5, strlen($string)) . '"'; 
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.business') as $e)
{
  // $string = $e->innertext;
  $string = $e->plaintext;
  //json formatting
  $string = '"business":' . '"' . substr($string, 8, strlen($string)) . '"'; 
  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.department') as $e)
{
  // $string = $e->innertext;
  $string = $e->plaintext;
  //json formatting
  $string = '"department":' . '"' . substr($string, 10, strlen($string)) . '"'; 

  fwrite($file, $string . "\n");
}

foreach ($html->find('tr.title') as $e)
{
  // $string = $e->innertext;
  $string = $e->plaintext;
  //json formatting
  $string = '"title":' . '"' . substr($string, 5, strlen($string)) . '"'; 
  echo $string;
  fwrite($file, $string . "\n");
}

fclose($file);
// // Find all TD tags with "align=center"
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // Extract all text from a given cell
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>
