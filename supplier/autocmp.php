<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>autocomplete demo</title>
<!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
 
<label for="autocomplete">Select a programming language: </label>
<input id="autocomplete">
 
<script>
var tags = [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ];
$( "#autocomplete" ).autocomplete({
  source: function( request, response ) {
          var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
          response( $.grep( tags, function( item ){
              return matcher.test( item );
          }) );
      }
});
</script>
 
</body>
</html>