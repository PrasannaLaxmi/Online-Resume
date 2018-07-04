<?php
define("DB_NAME", "resumedb");
define("DB_USER", "root");
define("DB_PASSWORD", "");
DEFINE ('DB_HOST', 'localhost');
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($dbc)
{
	echo "successfully connected";
}

$qry="select * from signin";
$result=mysqli_query($dbc,$qry);

if($result)
{
	echo "success";
}
$count=mysqli_num_rows($result);
for($i=1;$i<=$count;$i++)
{
$qry2="select * from resumedb where id=".$i;
$result2=mysqli_query($dbc,$qry2);
$fetch2=mysqli_fetch_array($result2);
echo $fetch2["id"]." ".$fetch2["name"]." ".$fetch2["place"]."<br>";
}

?>
<form method="post" action="prac2.php">
Name: <input type="text" name="uname">
Place: <input type="text" name="place">
<input type="submit" value="submit">
</form>




