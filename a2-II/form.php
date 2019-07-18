<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id2=$_POST['id1'];
$name2=$_POST['name1'];
$year2=$_POST['year1'];
$type2=$_POST['type1'];
$dim2=$_POST['dim1'];
$loc2=$_POST['loc1'];
$artist2=$_POST['artist1'];
$genre2=$_POST['genre1'];
$price2=$_POST['price1'];

$sql = "INSERT INTO artworks VALUES('".$id2."','".$name2."', '".$year2."','".$type2."','".$dim2."','".$loc2."', '".$artist2."','".$genre2."','".$price2."')";

$result = mysqli_query($conn,$sql);

if($result){
echo "Data Submitted succesfully";
}
mysqli_close($conn);
?>