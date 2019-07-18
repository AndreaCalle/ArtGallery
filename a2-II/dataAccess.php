<?php
class dataAccess {
    public function __construct(){}

    private function dbconnect() {
        // Create connection
        $servername = "localhost";
        $username = "username";
        $password = "";
        $dbname = "test";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    
    public function getArtistInfo($id) {
        $sql = "SELECT name,years,birthplace,genres,works FROM artists WHERE id = $id";
        return $this->query1($sql);       
    }
    
    public function getArtworkInfo($id) {
        $sql = "SELECT name,year,type,dimensions,location,artist,genre,price FROM artworks WHERE id = $id";
        return $this->query2($sql);
    }
    
    #query1 and query2 are repetitive, would be better to generalize into a single query function
    private function query1($sql) {
        $conn = $this->dbconnect();
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $this->showArtistInfo($row);
    }
    
    private function query2($sql) {
        $conn = $this->dbconnect();
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $this->showArtworkInfo($row);
    }
    
    #These "show" functions might be better in a different class since they affect the view   
    public function showArtistInfo($row) {
        $artistname = $row["name"];
        $artistyears = $row["years"];
        $birthplace = $row["birthplace"];
        $genres = $row["genres"];
        $works = $row["works"];

        echo "<h3>$artistname</h3>";
        echo "<h4>$artistyears</h4>";
        echo "<p><b>Place of birth</b>: $birthplace</p>
        <p><b>Genres</b>: $genres</p>
        <p><b>Notable works</b>: $works</p>";
    }
    
    public function showArtworkInfo($row) {
        $name = $row["name"];
        $year = $row["year"];
        $type = $row["type"];
        $dim = $row["dimensions"];
        $loc = $row["location"];
        $artist = $row["artist"];
        $genre = $row["genre"];
        $price = $row["price"];

        echo "<h3>$name</h3><p>
        <b>Year</b>: $year</p> 
        <p><b>Type</b>: $type</p> 
        <p><b>Dimensions</b>: $dim</p>
        <p><b>Location</b>: $loc</p> 
        <p><b>Artist</b>: $artist</p> 
        <p><b>Genre</b>: $genre</p> 
        <p><b>Price</b>: $$price</p> 
        <p><button class='dropbtn' data-toggle='modal' data-target='#myModal' onclick='showDialogFunction()'>
        <span class='glyphicon glyphicon-shopping-cart'></span></button></p>";
    }
    
    public function getArtworks() {
        $sql = "SELECT id,name,year,artist FROM artworks";
        return $this->query3($sql);
    }
    
    private function query3($sql) {
        $conn = $this->dbconnect();
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $this->showAllArtworks($result);
    }
    
    public function showAllArtworks($result) {
        echo "<center><table><th>Artwork ID</th><th>Name</th><th>Artist</th>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td id='artidcol'>" . $row["id"] . "</td><td>" . $row["name"]. "</td><td>" . $row["artist"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table></center>";
    }
    
    public function getMuseumInfo($id) {
        $sql = "SELECT name,year,location,builder,history,work FROM museum WHERE id = $id";
        return $this->query4($sql);
    }

    private function query4($sql) {
        $conn = $this->dbconnect();
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $this->showMuseumInfo($row);
    }

    public function showMuseumInfo($row) {
        $name = $row["name"];
        $year = $row["year"];
        $loc = $row["location"];
        $builder = $row["builder"];
        $work = $row["work"];
		$history = $row["history"];

        echo "<h3>$name</h3>";
        echo "<h4>$year</h4>";
        echo "<p><b>Developers</b>: $builder</p>
        <p><b></b>History: $history</p>
        <p><b>Famous art Works</b>: $work</p>
		<p><b>Location</b>: $loc</p>";
    }
}
?>