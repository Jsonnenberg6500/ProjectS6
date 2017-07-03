$('.button').click(function() {
     
$.ajax({
 type: "POST",
 url: "test.php",
 data: { name: "John" }
}).done(function( msg ) {
 alert( "Data Saved: " + msg );
});

   });
