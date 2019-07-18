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

$sql = "DELETE FROM artworks WHERE id = $id2";

$result = mysqli_query($conn,$sql);

if($result){
echo "Artwork deleted";
}
mysqli_close($conn);
?>