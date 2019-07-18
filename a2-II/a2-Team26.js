var cart = [];
var quant = [] ;
var price = 0;
var totalPrice = 0;
var ship = [] ; 
var art = "bob "; 

//dialog functions
function showDialogFunction() {
	var i = 0 ; 
	var check  = 0  ; 
	var a = cart.indexOf(art);
	
	for(i = 0 ; i < cart.length; i++)
	{
		if(cart[i].length == art.length ) {
			check = 1 ;
			document.getElementById("price").innerHTML= "Price: "+price ;  
		    document.getElementById("art").innerHTML = "Art Name: "+art  ; 
			document.getElementById("invoice").innerHTML =art + " already been purchased."
			//need to print invoice info 
			}
	}
	if(check < 1 )
	{
		document.getElementById("price").innerHTML= "Price: "+price ;  
		document.getElementById("art").innerHTML = "Art Name: "+art  ; 
		document.getElementById("invoice").innerHTML= "<p>Quantity: <input type='text' id='quantity'><br>Shipping plan: <input type='text' id='sp'><p><br> <button onclick='invoiceFunction()'>Submit</button>" ; 
		
	}	
}
//dialog function for the shopping cart at the top of the page
function showTotalInvoice(){
	var i = 0 ; 
	var total = "" ; 
	for(i = 0 ; i < cart.length; i++)
	{
	   total= total + "Art Name: "+ cart[i] +"<br>Quantity: "+ quant[i]+ "<br>" + "Shipping Plan:" + ship[i] + "<br>Total price: " + totalPrice +"<br>";      
	}
	document.getElementById("invoice").innerHTML = total;	
	
}
function invoiceFunction() {
	
	var quantity = document.getElementById("quantity").value   ; 
	var cost = totalPrice + quantity * price ; 
	var sp = document.getElementById("sp").value   ;  
	var total = "Quantity: "+ quantity+ "<br>" + "Shipping Plan:" + sp + "<br>Total price: " + cost; 
	document.getElementById("invoice").innerHTML = total;	
    cart.push(art);
	quant.push(quantity) ; 
    totalPrice+=cost;
}

//hides the website creators
function hideAbout() {
    $("#about").hide();
}

//hides the artists' photos and biography
function hideArtist() {
  $(".painter1,.painter2,.painter3,.painter4,.painter5,.artistInfo1,.artistInfo2,.artistInfo3,.artistInfo4,.artistInfo5").hide();
}

//hides the artwork and infomation
function hideArtwork() {
   $("#paintingInfo1,#paintingInfo2,#paintingInfo3,#paintingInfo4,#paintingInfo5").hide();    
    document.getElementById("image").innerHTML = "";
}

//hides the thumbnails and descriptions
function hideThumbnail() {
    document.getElementById("description").innerHTML = "";
    document.getElementById("thumbnail").innerHTML = "";
}

function hideMuseum() {
   $("#museumInfo1,#museumInfo2,#museumInfo3,#museumInfo4,#museumInfo5").hide();    
}

//hides previously selected elements
function hideAll() {
    $("#homemsg").hide();
    $("#maintainpanel").hide();
    $("#addpanel").hide();
    $("#rmpanel").hide();
    $("#modpanel").hide();
    hideAbout();
    hideArtist();
    hideArtwork();
    hideThumbnail();
    hideMuseum();
}

//shows the expanded description of artwork 1
function showArt1() {
    art = 'Mona Lisa';
    price = 140;
    hideAll();
    document.getElementById("image").innerHTML = "<img src='img1.jpg'>";
    $("#paintingInfo1").show();    
    document.getElementById("modal-content").innerHTML = price;
}

//shows the expanded description of artwork 2
function showArt2() {
    art = 'Starry Night';
    price = 90;
    hideAll();
    document.getElementById("image").innerHTML = "<img src='img2.jpg'>";
    $("#paintingInfo2").show();    
    document.getElementById("modal-content").innerHTML = price;
}
                 
function showArt3() {
    art = 'The Old Guitarist';
    price = 92;
    hideAll();
    document.getElementById("image").innerHTML = "<img src='img3.jpg'>";
    $("#paintingInfo3").show(); 
    document.getElementById("modal-content").innerHTML = price;
}

function showArt4() {
    art = 'Woman in a Garden';
    price = 70;
    hideAll();
    document.getElementById("image").innerHTML = "<img src='img4.jpg'>";
    $("#paintingInfo4").show(); 
    document.getElementById("modal-content").innerHTML = price;
}

function showArt5() {
    art = 'Andromeda Chained to the Rocks';
    price = 86;
    hideAll();
    document.getElementById("image").innerHTML = "<img src='img5.jpg'>";
    $("#paintingInfo5").show(); 
    document.getElementById("modal-content").innerHTML = price;
}

function showArtist1() {
    hideAll();
    $(".painter1,.artistInfo1").show();
}

function showArtist2() {
    hideAll();
    $(".painter2,.artistInfo2").show();
}

function showArtist3() {
    hideAll();
    $(".painter3,.artistInfo3").show();
}

function showArtist4() {
    hideAll();
    $(".painter4,.artistInfo4").show();
}

function showArtist5() {
    hideAll();
    $(".painter5,.artistInfo5").show();
}

function showMuseum1() {
    hideAll();
    document.getElementById("image").innerHTML = "<img src='crops/ago.jpg'>";
    $("#museumInfo1").show();
}

function showMuseum2() {
    hideAll();
    document.getElementById("image").innerHTML = "<img src='crops/louvre.jpg'>";
    $("#museumInfo2").show();
}

function showMuseum3() {
    hideAll();
    document.getElementById("image").innerHTML = "<img src='crops/thebmu.jpg'>";
    $("#museumInfo3").show();
}

function showMuseum4() {
    hideAll();
    document.getElementById("image").innerHTML = "<img src='crops/prado.jpg'>";
    $("#museumInfo4").show();
}

function showMuseum5() {
    hideAll();
    document.getElementById("image").innerHTML = "<img src='crops/vatican.jpg'>";
    $("#museumInfo5").show();
}

$(document).ready(function(){
    hideAll();
    $("#homemsg").show();
    
    /*$("#blogs").click(function()
        {hideAll();
    });*/
    
    $("#maintain").click(function()
        {hideAll();
         $("#maintainpanel").show();
    });
    
    $("#addart").click(function()
        {hideAll();
         $("#addpanel").show();
    });
    
    $("#rmart").click(function()
        {hideAll();
         $("#rmpanel").show();
    });
    
    $("#modart").click(function()
        {hideAll();
         $("#modpanel").show();
    });
    
    //art works menu
    $("#art1").click(function()
        {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArt1()'><h3>Mona Lisa</h3></a>The best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$140</b>. <br><br><a onclick='showArt1()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/img1.jpg' height='200'>";
    });
    
    $("#art2").click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArt2()'><h3>Starry Night</h3></a>Starry Night shows the vast power of nature and the church spire and cypress tree - representing man and nature - both point to the heavens. <b>$90</b>. <br><br><a onclick='showArt2()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='img2.jpg' height='200'>";
    });

    $("#art3").click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArt3()'><h3>The Old Guitarist</h3></a>This painting expresses the solitary life of an artist and the natural struggles that come with the career. <b>$92</b>. <br><br><a onclick='showArt3()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/img3.png' height='200'>";
    });

    $("#art4").click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArt4()'><h3>Woman in a Garden</h3></a>Monet spent the summer of 1867 with his family at Sainte-Adresse, a seaside resort near Le Havre. It was there that he painted this. <b>$70</b>. <br><br><a onclick='showArt4()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='img4.jpg' height='200'>";
    });
    
    $("#art5").click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArt5()'><h3>Andromeda Chained to the Rocks</h3></a> This painting depicts a classic example of the damsel in distress. <b>$86</b>. <br><br><a onclick='showArt5()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/img5.jpg' height='200'>";
    });
    
    //artists menu    
    $('#artist1').click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArtist1()'><h3>Leonardo da Vinci</h3></a> The father of palaeontology, ichnology, and architecture, and one of the greatest painters of all time. <br><br><a onclick='showArtist1()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/davinci.jpg' height='200'>";
    });
    
   $('#artist2').click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArtist2()'><h3>Vincent Van Gogh</h3></a> A Dutch Post-Impressionist painter who is among the most famous and influential figures in the history of Western art. <br><br><a onclick='showArtist2()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/vangogh.jpg' height='200'>";
    });
    $('#artist3').click(function()
        {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArtist3()'><h3>Pablo Picasso</h3></a> Painter and sculptor, co-founder of Cubism and one of the most influential modernist artists of the 20th century. <br><br><a onclick='showArtist3()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='picasso.jpg' height='200'>";
    });
    
    $('#artist4').click(function()
        {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArtist4()'><h3>Claude Monet</h3></a> Masterful painter of light and atmosphere whose observations viewed at various times of the day, were captured in sequences of paintings. <br><br><a onclick='showArtist4()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/monet.jpg' height='200'>";
    });
    
    $('#artist5').click(function()
       {hideAll();
        document.getElementById("description").innerHTML = "<a onclick='showArtist5()'><h3>Rembrandt van Rjin</h3></a> One of the greatest painters in all of European Art and etcher of the Dutch Golden Age. <br><br><a onclick='showArtist5()'>Read more</a>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/rembrandt.jpg' height='200'>";
    });
    
    $("#home").click(function()
        {hideAll();
         $("#homemsg").show();
    });
    
    $("#aboutus").click(function()
        {hideAll();
         $("#about").show();
    });
    
	// museum 
	$('#museum1').click(function()
        {hideAll();
		document.getElementById("description").innerHTML = "<a onclick='showMuseum1()'><h3>Art Gallery of Toronto</h3></a>The most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$160</b> <br>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/ago.jpg' height='200'>";
    });
    $('#museum2').click(function()
        {hideAll();
		document.getElementById("description").innerHTML = "<a onclick='showMuseum2()'><h3>The Louvre</h3></a>The best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$140</b> <br>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/louvre.jpg' height='200'>";
    });
    $('#museum3').click(function()
        {hideAll();
		document.getElementById("description").innerHTML = "<a onclick='showMuseum2()'><h3>The British Museum</h3></a>The best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$140</b> <br>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/tbmus.jpg' height='200'>";
    });
	$('#museum4').click(function()
        {hideAll();
		document.getElementById("description").innerHTML = "<a onclick='showMuseum4()'><h3>The Prado</h3></a>The best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$140</b> <br>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/prado.jpg' height='200'>";
    });
	$('#museum5').click(function()
        {hideAll();
		document.getElementById("description").innerHTML = "<a onclick='showMuseum5()'><h3>Vatican Museum</h3></a>The best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world. <b>$140</b>";
        document.getElementById("thumbnail").innerHTML = "<img src='./crops/vatican.jpg' height='200'>";
    });
});