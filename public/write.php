<?php
include_once('../scripts/fiu_search.php');
include_once('connect.php');

function write($firstName, $lastName)
    {
    $dom = file_get_html('http://phonebook.fiu.edu/?q=' . $firstName . 
                        '+' . $lastName . '&go=Search&axis=employee');
    //opening values file
    $file = fopen(__DIR__ . '/../professors/' . $firstName . '_' . $lastName . '.json', 'w');
  
    //writing first and last_name values
    fwrite($file, '"firstName":' . '"' . $firstName . '"' . "\n");
    fwrite($file, '"lastName":' . '"' . $lastName . '"' . "\n");
          
    search('email', $file, $firstName, $lastName, $dom);
    search('business', $file, $firstName, $lastName, $dom);
    search('department', $file, $firstName, $lastName, $dom);
    search('title', $file, $firstName, $lastName, $dom);
          
    fwrite($file, '"college":' . '"Florida International University"' . "\n");
    fclose($file); 
    
    $file = file_get_contents(__DIR__ . '/../professors/' . $firstName . '_' . $lastName . '.json');
    $json = json_decode($file, true);
    
    echo $json['lastName'];
    $result = db_query('INSERT INTO `professors`(`firstName`, `lastname`, `email`, `business`, `department`, `title`, `college`) 
        VALUES (' . $json['firstName'] . ',' . $json['lastName'] . ',' . $json['email'] . ',' . $json['business'] . ',' . 
        $json['department'] . ',' . $json['title'] . ')');
        
        // An insertion query. $result will be `true` if successful
    $result = db_query("INSERT INTO `users` (`name`,`email`) VALUES ('John Doe','john.doe@gmail.com')");
    if($result === false) {
        $error = db_error();
        // Handle failure - log the error, notify administrator, etc.
    } else {
 
        // We successfully inserted a row into the database
    }
    }
    
?>