$(document).ready(function() {
   console.log( "ready!" );
});

$("#toon-gegevens").on("click", function(){
    console.log("Er is op de button geklikt");
    $("#gegevens").toggle();
    $("#gegevens").is(":visible") ? $("#toon-gegevens").html("Verberg gegevens") : $("#toon-gegevens").html("Toon gegevens");
});

$('#medewerkersTabel').DataTable( {
      "language": {
        "emptyTable": "Geen data gevonden",
        "zeroRecords": "Er is niets gevonden dat voldoet aan de zoekcriteria"
      }
  });
