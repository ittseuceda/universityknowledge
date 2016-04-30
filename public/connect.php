    <?php

    function db_connect() {
    // Try and connect to the database
    static $connection;
    if(!isset($connection)) 
    {
        $connection = mysqli_connect('localhost', 'root', 'root', 'universityknowledge');
    }
    
    if($connection === false)
    {
        echo "Not connected";
        // If connection was not successful, handle the error
        return mysqli_connect_error();
    }
    
    // echo "connected";
    return $connection;
    }
    
   function db_query($query) {
        // Connect to the database
        $connection = db_connect();

        // Query the database
        $result = mysqli_query($connection,$query);

        return $result;
    }
    
   function db_select($query) {
        $rows = array();
        $result = db_query($query);

        // If query failed, return `false`
        if($result === false) {
            return false;
        }

        // If query was successful, retrieve all the rows into an array
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    function db_error(){
        $connection = db_connect();
        return mysqli_error($connection);
    }

    
    
    ?>