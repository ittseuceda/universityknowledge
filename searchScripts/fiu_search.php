<?php
// // Include simple-html library to get the DOM
include('simple_html_dom.php');

function search($query_name, $file, $first_name, $last_name, $dom)
{
  foreach ($dom->find('tr.' . $query_name) as $e)
  {
    // $string = $e->innertext;
  	$string = $e->plaintext;
    //json formatting
    $string = '"' . $query_name . '":' . '"' . substr($string, strlen($query_name), 
              strlen($string)) . '"'; 
    
    /*for debugging*/
    // echo $string;
    fwrite($file, $string . "\n");
  }
}
     
//declaring first and last name
//TODO: pass these values dynamically             
$first_name = 'Lindsay';
$last_name = 'Malloy';

// Retrieve the DOM from a given URL for FIU
$html = file_get_html('http://phonebook.fiu.edu/?q=' . $first_name . 
                        '+' . $last_name . '&go=Search&axis=employee');
//opening values file
$file = fopen(__DIR__ . '/../professors/' . $first_name . '_' . $last_name . '.json', 'w');

//writing first and last_name values
fwrite($file, '"firstName":' . '"' . $first_name . '"' . "\n");
fwrite($file, '"lastName":' . '"' . $last_name . '"' . "\n");

//searching for other values
search('email', $file, $first_name, $last_name, $html);
search('business', $file, $first_name, $last_name, $html);
search('department', $file, $first_name, $last_name, $html);
search('title', $file, $first_name, $last_name, $html);

//closing values file
fclose($file);
?>
