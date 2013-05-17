<?
$user="jrmh05_a100";
$password="database";
$database="jrmh05_a100";
mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die("Unable to select database");
$sql="INSERT INTO Employer (firstName,lastName,companyName,emailAddress,positionTitle,state,remoteWorking,responsibilities,skills,compensation,extra)
 VALUES('$_POST[firstName]','$_POST[lastName]','$_POST[companyName]','$_POST[emailAddress]','$_POST[positionTitle]','$_POST[state]','$_POST[remoteWorking]','$_POST[responsibilities]','$_POST[skills]','$_POST[compensation]','$_POST[extra]')";
if(!mysql_db_query($database,$sql)) die(mysql_error());
echo "Thank you for your post. Your data was entered successfully.";

echo "<br />";
echo "<a href=\"index.html\">Click here to return to the form page.</a>";
mysql_close();
?>