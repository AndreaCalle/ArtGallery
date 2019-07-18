<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="a2-Team26.js?2"></script>
        <script src="form.js"></script>
        <script>
            //closes the search popup and shows the painting that was searched for, if found in the database
            function showSearchedArtwork(id) {
                $("#myPopup").hide();
                switch(id) {
                    case 1:
                        showArt1();
                        break;
                    case 2:
                        showArt2();
                        break;
                    case 3:
                        showArt3();
                        break;
                    case 4:
                        showArt4();
                        break;
                    case 5:
                        showArt5();
                        break;
                    default:
                        //do nothing
                }
            }
            </script>
        <link rel="stylesheet" href="a2-Team26.css?3">
    </head>
    <body>
        <div class=container-fluid>
            <div class="topnav">
                <button class="dropbtn top-nav" id="home">Home</button>
				<button class="dropbtn top-nav" id="aboutus">About Us</button>
				<button class="dropbtn top-nav" id="blogs">Blogs</button>
                <div class="topnav-right">
                    <button class="dropbtn top-nav" id="maintain">Maintain</button>
                    <!--<button class="dropbtn top-nav" id="account">Account</button>-->
                    <button class="dropbtn top-nav" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                    </button>
                    <div class="search-container">
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <input type="text" placeholder="Search Artwork" name="search">
                            <button type="submit" class="dropbtn top-nav">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <h1 id="title">Online Art Gallery & Print Store</h1>
            <div class="nav">
                <div class="dropdown">
                    <button class="dropbtn">Art Works</button>
                    <div class="dropdown-content">
                        <a id="art1">Mona Lisa</a>
                        <a id="art2">Starry Night</a>
                        <a id="art3">The Old Guitarist</a>
                        <a id="art4">Woman in a Garden</a>
                        <a id="art5">Andromeda Chained to the Rocks</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Artists</button>
                    <div class="dropdown-content">
                        <a id="artist1">Leonardo da Vinci</a>
                        <a id="artist2">Vincent Van Gogh</a>
                        <a id="artist3">Pablo Picasso</a>
                        <a id="artist4">Claude Monet</a>
                        <a id="artist5">Rembrandt</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Museum</button>
                    <div class="dropdown-content">
                        <a id="museum1">Art Gallery of Ontario</a>
                        <a id="museum2">Louvre</a>
                        <a id="museum3">The British Museum</a>
                        <a id="museum4">The Prado</a>
                        <a id="museum5">The Vatican Museum</a>
                    </div>
                </div>
            </div>
            
            <div id="homemsg">
                <br><br><br>
                <p>This website is a curated selection of some of the world's finest artwork.
                    <br>Select an item from the dropdown menus above to preview a painting or
                    an artist.
                    <br>High quality prints can be purchased by clicking the shopping cart icon on each artwork.
                </p>
            </div>
            
            <div id="about">
                <h4>Team 26 Members:</h4>
                <br>
                <p><b>Andrea Calle</b>, 500458803</p>
                <p><b>Leslie Cheung</b>, 500637474</p>
                <p><b>Arslaan Ahmed</b>, 500572739</p>
            </div>
            
            <div id="maintainpanel">
                <br><br><br>
                <p><b>Manage Artwork</b></p>
                <button type="button" class="btn btn-default" id="addart">Add</button>
                <button type="button" class="btn btn-default" id="rmart">Delete</button>
                <button type="button" class="btn btn-default" id="modart">Edit Record</button>
            </div>
            
            <div id="addpanel" class="maintain">
                <form id="form" name="form">
                    <p><b>Add Artwork</b></p>
                    ID (required): <br> <input type="text" id="artid"> <br>
                    Name: <br> <input type="text" id="artname"> <br>
                    Year: <br> <input type="text" id="year"> <br>
                    Type: <br> <input type="text" id="type"> <br>
                    Dimensions: <br> <input type="text" id="dim"> <br>
                    Location: <br> <input type="text" id="artloc"> <br>
                    Artist: <br> <input type="text" id="artist"> <br>
                    Genre: <br> <input type="text" id="genre"> <br>
                    Price: <br> <input type="text" id="price"> <br><br>
                <input id="submitnewart" type="button" value="Save">
                </form>
            </div>
            
            <div id="rmpanel" class="maintain">
                <?php
                include_once 'dataAccess.php';
                $dal = new dataAccess(); //create a new data access object to use the gallery database
                $dal->getArtworks();
                ?>
                <br><br>
                <form id="form2" name="form2">
                    <p><b>Delete Artwork</b></p>
                    <p>Enter the artwork's ID to delete it from the collection.</p>
                    <br> <input id="artidbox" type="text">
                <input id="submitrmart" type="button" value="Save">
                </form>
            </div>
            
            <div id="modpanel" class="maintain">
                <?php
                $dal->getArtworks();
                ?>
                <br><br>
                <form id="form3" name="form3">
                    <p><b>Modify Artwork</b></p>
                    ID (required): <br> <input type="text" id="modid"> <br>
                    Name: <br> <input type="text" id="modname"> <br>
                    Year: <br> <input type="text" id="modyear"> <br>
                    Type: <br> <input type="text" id="modtype"> <br>
                    Dimensions: <br> <input type="text" id="moddim"> <br>
                    Location: <br> <input type="text" id="modloc"> <br>
                    Artist: <br> <input type="text" id="modartist"> <br>
                    Genre: <br> <input type="text" id="modgenre"> <br>
                    Price: <br> <input type="text" id="modprice"> <br><br>
                <input id="submitmodart" type="button" value="Save">
                </form>
            </div>
            
            <!--artists-->
            <div class="col-sm-6 painter1"><img src ="davinci.jpg" width="400px"></div>
            <div class="col-sm-6 painter2"><img src ="vangogh.jpg" width="400px"></div>
            <div class="col-sm-6 painter3"><img src ="picasso.jpg" width="400px"></div>
            <div class="col-sm-6 painter4"><img src ="monet.jpg" width="400px"></div>
            <div class="col-sm-6 painter5"><img src="rembrandt.jpg" width="400px"></div>
            
            <div class="col-sm-6 artistInfo1">
                <?php 
                $id = 1;
                $dal->getArtistInfo($id);
                ?>        
			</div>

			<div class="col-sm-6 artistInfo2">
                <?php 
                $id = 2;
                $dal->getArtistInfo($id);
                ?>         
			</div>

			<div class="col-sm-6 artistInfo3">
                <?php 
                $id = 3;
                $dal->getArtistInfo($id);
                ?>            
			</div>

			<div class="col-sm-6 artistInfo4">
                <?php 
                $id = 4;
                $dal->getArtistInfo($id);
                ?>           
			</div>

			<div class="col-sm-6 artistInfo5">
                <?php 
                $id = 5;
                $dal->getArtistInfo($id);
                ?>             
			</div>
            
			<!--DIALOG BLOCK--> 
            <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">INVOICE</h4>
					</div>	
					<div id = 'art'> </div>
					<div id = 'price'> </div>
					<div id="invoice">
	                 </div>
				<div  class="modal-footer"></div>					 
				</div>
			</div>
            
			<!--museum works--> 
            <div class="col-sm-6" id="image"></div>
			<div class="col-sm-6" id="museumInfo1">
            <?php 
            $id=1;
            $dal->getMuseumInfo($id);
            ?>
			</div>
			<div class="col-sm-6" id="museumInfo2">
            <?php 
            $id=2;
            $dal->getMuseumInfo($id);
            ?>
            </div>
		    <div class="col-sm-6" id="museumInfo3">
            <?php 
            $id=3;
            $dal->getMuseumInfo($id);
            ?>
            </div>
		    <div class="col-sm-6" id="museumInfo4">
            <?php 
            $id=4;
            $dal->getMuseumInfo($id);
            ?>
            </div>
		    <div class="col-sm-6" id="museumInfo5">
            <?php 
            $id=5;
            $dal->getMuseumInfo($id);
            ?>
            </div>
		
            <!--art works-->       
            <div class="col-sm-6" id="image"></div>
            <div class="col-sm-6" id="paintingInfo1">
            <?php 
            $id=1;
            $dal->getArtworkInfo($id);
            ?>
            </div>
            
            <div class="col-sm-6" id="paintingInfo2">
            <?php 
            $id=2;
            $dal->getArtworkInfo($id);
            ?>
            </div>
            
            <div class="col-sm-6" id="paintingInfo3">
            <?php 
            $id=3;
            $dal->getArtworkInfo($id);
            ?>
            </div>
            
            <div class="col-sm-6" id="paintingInfo4">
            <?php 
            $id=4;
            $dal->getArtworkInfo($id);
            ?>
            </div>
            
            <div class="col-sm-6" id="paintingInfo5">
            <?php 
            $id=5;
            $dal->getArtworkInfo($id);
            ?>
            </div>
        </div>
        
        <!--art works thumbnails/brief description-->       
        <div class="row">
            <div class="col-sm-4"> </div>
            <div class="col-sm-4" id="description"> </div>
            <div class="col-sm-4" id="thumbnail"> </div>
        </div>
        
    </body>
    
    <!--for processing the artworks search functionality-->
    <?php
        if(isset($_POST['search']) and $_POST['search'] != "")
        {
            $servername = "localhost";
            $username = "username";
            $password = "";
            $dbname = "test";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $search = $_POST['search'];
            $sql = "SELECT id,name,year,artist FROM artworks WHERE lower(name) LIKE '%{$search}%'";
            
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            
            $id = $row['id'];
            $name = $row['name'];
            $year = $row['year'];
            $artist = $row['artist'];
            
            echo "<div class='popup'><span class='searchPopup' id='myPopup' onclick='showSearchedArtwork($id)'>";
            
            if($row == 0) {
                 echo "No artwork found!</span></div>";
            } else {  
                echo "Found result(s): <p> $name ($year) by $artist</p></span></div>"; 
            }
            
            mysqli_free_result($result);
            mysqli_close($conn);
        }
    ?> 
</html>