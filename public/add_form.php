        <!-- Use it -->         
        <!-- Screenshot -->         
        <div id="screen" class="content-section-b"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center-align"> 
                        <h2>Find Professors</h2> 
                        <p class="lead" style="margin-top:0">Search for a professor from the implemented Colleges<br></p>
                        <p class="lead" style="margin-top:0">(Searching for a professor that is not currently supported will actually add him to the database and provide the data available)</p>
                    </div>
                </div>
                    <form role="form" action="find.php" method="post">
                        <div class="col-md-6 col-md-offset-3">
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