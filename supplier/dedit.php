<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Live Demo at CodexWorld - Add Remove Input Fields Dynamically using jQuery">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title>Live Demo - Add Remove Input Fields Dynamically using jQuery</title>
        <!-- Bootstrap core CSS -->
        <link href="http://demos.codexworld.com/includes/css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="http://demos.codexworld.com/includes/css/style.css" rel="stylesheet">
        
<style type="text/css">
input[type="text"]{height:20px; vertical-align:top;}
.field_wrapper div{ margin-bottom:10px;}
.add_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
.remove_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
</style>
</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                        <a class="navbar-brand" href="https://www.codexworld.com/">
                <img src="https://www.codexworld.com/wp-content/uploads/2014/09/codexworld-logo.png" alt="CodexWorld">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
     
                    </div>
        <!-- /.navbar-collapse -->
          	</div>
</nav>

<div class="demo-title"><h4>DEMO BY <span class="one">CODEX</span><span class="two">WORLD</span>: Add Remove Input Fields Dynamically using jQuery</h4></div>
        
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div>
                        	<form name="codexworld_frm" action="" method="post">
            	<div class="field_wrapper">
                    <div>
                        <input type="text" name="field_name[]" value=""/>
						<a href="javascript:void(0);" class="add_button" title="Add field"><img src="http://demos.codexworld.com/add-remove-input-fields-dynamically-using-jquery/add-icon.png"/></a>
                    </div>
                </div>
                <input type="submit" name="submit" value="SUBMIT"/>
                </form> 
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
    	
        	<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     	        <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    	<script type="text/javascript">
$(document).ready(function(){
	var maxField = 10; //Input fields increment limitation
	var addButton = $('.add_button'); //Add button selector
	var wrapper = $('.field_wrapper'); //Input field wrapper
	var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="http://demos.codexworld.com/add-remove-input-fields-dynamically-using-jquery/remove-icon.png"/></a></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	
	//Once add button is clicked
	$(addButton).click(function(){
		//Check maximum number of input fields
		if(x < maxField){ 
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); //Add field html
		}
	});
	
	//Once remove button is clicked
	$(wrapper).on('click', '.remove_button', function(e){
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
</body>
</html>
