<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>{$title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="icon" sizes="192x192" href="images/lolicon.png">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
		<header>
		
		<ul class="topnav" id="myTopnav">
		
		<li><a class="active" href="?action=home">Home</a></li>
		<li><a href="?action=admin">CMS</a></li>
		</li>
		
		 <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a> 
  </li>
		</ul>
			
		<div id="logoTag">
			<img src="images/riotlogo.png" alt="">
			<h2>WE ARE RIOTERS</h2>
</div>


</header>
		
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>
