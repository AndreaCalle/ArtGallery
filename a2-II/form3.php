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

$sql="UPDATE artworks SET name = '$name2' , year = '$year2',type = '$type2' , dimensions = '$dim2', 
    location = '$loc2',artist = '$artist2', genre='$genre2',price= '$price2' WHERE id = '$id2'";

$result = mysqli_query($conn,$sql);

if($result){
echo "Artwork updated succesfully";
}
mysqli_close($conn);
?>