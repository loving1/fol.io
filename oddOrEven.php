<html>
<body>



<b>Welcome! <br> Please enter your number below<br><br></b>

<form action="oddOrEven.php" method="post">
Number: <input type="number" name="funNum"><br><br>
<input type="submit">
</form>

<?php 
echo "<br>";
if(isset($_POST["funNum"])) {
echo "Your number is: " ;
echo $_POST["funNum"];
//echo "<br>";
echo " which is ";
print test2($_POST["funNum"]);
echo "."; 
echo "<br>";
}


function test2($x) {
	if($x%2) {
		return 'odd';
	}
	else {
		return 'even';
	}
}
/*
echo "Your Name is: "; 
echo $_GET["name"]; 
echo "<br>";
echo "Your number is:" ;
echo $_GET["funNum"]; 
echo "Which is ";
print test2($_GET["funNum"]);
echo "<br>";
echo "Your email address is: ";
echo $_GET["email"]; 
*/
?>
</body>
</html>