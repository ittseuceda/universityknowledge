
    
<?php include 'header.php';?>
<body>
       
<div id="screen" class="content-section-b"> 
    <div class="container"> 
        <!--For Testing Purposes-->
        <div class="col-md-6 col-md-offset-3">
     
        <!--Welcome <?php echo $_POST["lastName"]; ?>!<br />-->
        
        <!--Function that passes values from POST to search function in fiu_search and 
            writes the found information on a json file in ../professors/-->
        <?php 
          include('../scripts/fiu_search.php');
          include('connect.php');
          $firstName = $_POST["firstName"];
          $lastName = $_POST["lastName"];
          
          if($firstName == NULL && $lastName == NULL)
          {
            Header("Location: index.php");
          }else {
              
          }
          //   echo $firstName;
          //   echo $lastName;
          $dom = file_get_html('http://phonebook.fiu.edu/?q=' . $firstName . 
                        '+' . $lastName . '&go=Search&axis=employee');
          //opening values file
          $file = fopen(__DIR__ . '/professors/' . $firstName . '_' . $lastName . '.json', 'w');
            
          $college = "Florida International University";
          //writing first and last_name values
          fwrite($file, '"firstName":' . '"' . $firstName . '"' . "\n");
          fwrite($file, '"lastName":' . '"' . $lastName. '"' . "\n");
          
          $email = search('email', $file, $firstName, $lastName, $dom);
          $business = search('business', $file, $firstName, $lastName, $dom);
          $dept = search('department', $file, $firstName, $lastName, $dom);
          $title = search('title', $file, $firstName, $lastName, $dom);
          
          fwrite($file, '"college":' . '"Florida International University"' . "\n");
          fclose($file); 
          
          $result = db_query('INSERT INTO `professors` (`firstName`,`lastName`, `email`, `business`, 
          `department`, `title`, `college`) VALUES("' . $firstName . '","' . $lastName . '","' . $email . 
          '","' . $business . '","' . $dept . '","' . $title . '","' . $college . '")'); 
          
          $rows = db_select('SELECT `firstName`, `lastName`, `email`, `business`, `department`, `title`, `college` FROM `professors` WHERE firstName="' . $firstName . '" AND lastName="' . $lastName . '"');
        //   echo '<h2>' . $rows[0]['firstName'] . '</h2>';
          echo '<h4>' . 'Here is your professor information:' . '</h4>';

          echo '<ul class="list-group">
          <li class="list-group-item"><span class="badge">' . $rows[0]['firstName'] . '</span>First Name: </li>' . 
          '<li class="list-group-item"><span class="badge">' . $rows[0]['lastName'] . '</span> Last Name: </li>' . 
          '<li class="list-group-item"><span class="badge">' . $rows[0]['email'] . '</span> E-mail: </li>' . 
          '<li class="list-group-item"><span class="badge">' . $rows[0]['business'] . '</span> Phone Number: </li>' . 
          '<li class="list-group-item"><span class="badge">' . $rows[0]['department'] . '</span> Department of Study: </li>' . 
          '<li class="list-group-item"><span class="badge">' . $rows[0]['title'] . '</span> Title held: </li>' .    
          '<li class="list-group-item"><span class="badge">' . $college . '</span> College: </li>'; 
    
        ?>
        </ul>
          
        <!-- Use it -->         
        <!-- Screenshot -->         
        <div id="screen" class="content-section-b"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6  text-center-align"> 
                        <h2>Find Professors</h2> 
                        <p class="lead" style="margin-top:0">Search for a professor from the implemented Colleges<br></p>
                        <p class="lead" style="margin-top:0">(Searching for a professor that is not currently supported will actually add him to the database and provide the data available)</p>
                    </div>
                </div>
                    <form role="form" action="find.php" method="post">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="InputName" class="control-label">First Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name" required>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputName" class="control-label">Last Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span> 
                                </div>
                            </div>
                            <select class="form-control"> 
                                <option>Florida International University</option>                                                                  
                            </select>
                            <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
                        </div>
                    </form>                     
            </div>             
        </div>         
        <!-- Footer -->         
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 text-center wrap_title"> 
                        <h2><a href="http://theideacenter.co/cs50xmiami/">CS50xMiami</a></h2> 
                    </div>                     
                </div>                 
            </div>             
        </div>         
        <footer> 
</footer>         












