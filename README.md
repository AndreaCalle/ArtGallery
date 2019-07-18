# ArtGallery
The user is given a brief description of the purpose of the site. At the top left corner above the header, there are buttons for Home, About Us and Blog. On the right top corner is the Maintain page which allows changes to the made to the database, the Shopping Cart to track the user’s purchases and a Search bar which allows the user to search for a painting.

The Search dialogue box is in the top right side of the web page. A user can search for artwork by typing in the search bar, sending a MySQL query to the server and outputting the name, year and price on the bottom right side of the main page. The user can click on the information to then be sent to the artwork page, using JavaScript functions with cases to direct the user to the right artwork.   

The maintain page works by presenting the user with 3 buttons: Add, Delete or Edit Record. Each of the buttons when clicked, take the user to a form that once filled in does the required process. 

Three database tables are used for Art gallery website, called “Artist”, “Artwork” and “Museum”. The tables are not related to each other, the primary keys are the IDs.  They’re accessed by the dataAccess.php file, It connects to the database and retrieve the table information using php functions. Each function will collect a certain table information and display it to the page. 

The maintenance functionality is implemented using a combination of jQuery and PHP, as well as MySQL. The artwork table in the gallery database may be changed by adding, deleting, or editing records. 

Lastly, to modify an existing artwork in the database, the administrator must input the numeric ID of the record to edit and then submit the appropriate changes in a form. Upon submission of the form, jQuery is used to extract the form contents and pass them to PHP. PHP is used to connect to the database and run the corresponding MySQL command to update the table:
