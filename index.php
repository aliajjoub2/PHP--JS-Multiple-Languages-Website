<?php
	
session_start();

include 'init.php';
include 'function.php';
make_language();
$language_file=lang_path();
include($language_file);

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.language_dropbtn {
	background-color: #3498DB;
	color: white;
	padding: 16px;
	font-size: 16px;
	border: none;
	cursor: pointer;
	}

	.language_dropbtn:hover, .language_dropbtn:focus {
	background-color: #2980B9;
	}

	.language_dropdown {
	position: relative;
	display: inline-block;
	}

	.language_dropdown_content{
	display: none;
	position: absolute;
	background-color: #f1f1f1;
	min-width: 105px;
	overflow: auto;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	}

	.language_dropdown_content input {
	color: black;
	padding: 12px 16px;
	border: none;
	display: block;
	width: 100%;
	}
	.language_dropdown_content input:hover{
	background-color: red;
	}

	.language_dropdown a:hover {background-color: #ddd;}

	.show {display: block;}
</style>
</head>
<body>



<div class="language_dropdown">
  <button onclick="myFunction()" class="language_dropbtn">Language</button>
  <div id="language_Dropdown" class="language_dropdown_content">
			<form action="" method="POST">
				<input type="submit" name="de" value="Deutsch">
				<input type="submit" name="ar" value="arabic">
				<input type="submit" name="en" value="English">
				
			</form>
  </div>
</div>


<div>
    <?php
    echo $language['learning Sass'];
    echo $language['Login/Signup'];
    echo $language['Logo'];


    ?>
</div>
<script>
		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		document.getElementById("language_Dropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		if (!event.target.matches('.language_dropbtn')) {
			var dropdowns = document.getElementsByClassName("language_dropdown_content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
			}
		}
		}
</script>

</body>
</html>