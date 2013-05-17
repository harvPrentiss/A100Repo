 <!doctype html>

<html>
        <head>
                <meta charset="UTF-8">
                <title>Post A Jobs</title>
                <link rel ="stylesheet" href="global.css">
        </head>
        <body>
                <div id="header">
                        <h1>Post A Job</h1>

                </div>
                    <?php 
    	        //connect to database
                    	$dbConnect = mysqli_connect("localhost","jrmh05","boobie05",
                      	   jrmh05_a100);
                      
                        //check connection
                        if (mysqli_connect_errno($dbconnect))
                        {
                            echo "Unable to connect to the Database: ".mysqli_connect_error();
                        }
                    
                       //select a database
                       $selected = mysql_select_db("Employer",dbConnect)
                          or die ("Could not select examples");
                      
                       //declare variables
                       $firstname = $_POST['firstName'];
                       $lastname  = $_POST['lastName'];
		       $compName  = $_POST['companyName'];
                       $compID    = rand(1, 1000);
                       $location  = $_POST['state'];
                       $respons   = $_POST['responsibilities'];
                       $desiredskill = $_POST['skills'];
                       $compensate  = $_POST['compensation'];
                       $extras      = $_POST['extra'];                       

		            ?>
				
                <div id="contentContainer">
                        <h2>Enter the information below to post your job.</h2><br>
                                First Name: <br>
                                <input type="text" name="firstName">
                                <br>
                                Last Name: <br>
                                <input type="text" name="lastName">
                                <br>
                                Company Name: <br>
                                <input type="text" name="companyName">
                                <br>
                                Location: <select name="state">
                                        <option value='-1'>Select State</option>
                                        <option value='1'>Connecticut</option>
                                        <option value='2'>Maine</option>
                                        <option value='3'>Massachusetts</option>
                                        <option value='4'>New Hampshire</option>
                                        <option value='5'>New York</option>
                                        <option value='6'>Rhode Island</option>
                                        <option value='7'>Vermont</option>
                                        <option value='8'>Other</option>
                                        </select>
                                <br>
                                Work Remotely: <select name='remoteWorking'>
                                                <option value='1'>Yes</option>
                                                <option value='2'>No</option>
                                                <option value='3'>Maybe</option>
                                        </select>
                                <br>
                                Responsibilities<br>
                                <textarea name="responsibilities" rows="10" col="75"></textarea>
                                <br>
                                Desired Skills<br>
                                <textarea name="skills" rows="10" col="75"></textarea>
                                <br>
                                Compensation<br>
                                <textarea name="compensation" rows="10" col="75"></textarea>
                                <br>
                                Extra<br>
                                <textarea name="extra" rows="10" col="75"></textarea>
                                <br>
                                <input type="submit" value="Submit">
                </div>  
                
                    <?php   
                        //Insert data into database.
                        $sql = "INSERT INTO Employer (Company,ID,Locations,F_Name,L_Name,responsibility,
                            desired,compensation,additional) 
                                VALUES ($compName, $compID, $location,$firstname,
                                    $lastname,$respons, $desiredskill,$compensate,$extras)";
                    ?>
        </body>
</html>