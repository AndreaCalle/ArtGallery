$(document).ready(function() {
    $("#submitnewart").click(function() {
        var id = $("#artid").val();
        var name = $("#artname").val();
        var year = $("#year").val();
        var type = $("#type").val();
        var dim = $("#dim").val();
        var loc = $("#artloc").val();
        var artist = $("#artist").val();
        var genre = $("#genre").val();
        var price = $("#price").val();
        if (id == '') {
        alert("Primary key ID missing");
        } else {
        $.post("form.php", {
            id1: id,
            name1: name,
            year1: year,
            type1: type,
            dim1: dim,
            loc1: loc,
            artist1: artist,
            genre1: genre,
            price1: price   
            }, function(data) {
                alert(data);
                $('#form')[0].reset(); // To reset form fields
            });
        }
    });

    $("#submitrmart").click(function() {
        var id = $("#artidbox").val();
        if (id == '') {
        alert("Primary key ID missing");
        } else {
        $.post("form2.php", {
            id1: id, 
            }, function(data) {
                alert(data);
                $('#form2')[0].reset(); // To reset form fields
            });
        }
    });
    
    $("#submitmodart").click(function() {
        var id = $("#modid").val();
        var name = $("#modname").val();
        var year = $("#modyear").val();
        var type = $("#modtype").val();
        var dim = $("#moddim").val();
        var loc = $("#modloc").val();
        var artist = $("#modartist").val();
        var genre = $("#modgenre").val();
        var price = $("#modprice").val();
        if (id == '') {
        alert("Primary key ID missing");
        } else {
        $.post("form3.php", {
            id1: id,
            name1: name,
            year1: year,
            type1: type,
            dim1: dim,
            loc1: loc,
            artist1: artist,
            genre1: genre,
            price1: price   
            }, function(data) {
                alert(data);
                $('#form3')[0].reset(); // To reset form fields
            });
        }
    });
});