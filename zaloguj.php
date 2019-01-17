<?php
		session_start();
?>

<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Simply Cooking</title>
	<meta name="description" content="Ksiażka Kucharska" />
	<meta name="keywords" contetnt="Jedzenie" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="Stylesheet" href="css/bootstrap.css" type="text/css" >
	
    <link rel="Stylesheet" href="css/style.css" type="text/css" >
	
	<link rel="stylesheet" href="css/fontello.css">
	
	<script type="text/javascript" src="timer.js"></script>
	<script src="jquery.js"></script>
	
	<SCRIPT language="javascript" type="text/javascript"> <!-- blokada prawego przycisku myszy -->
<!-- Ukrycie przed przeglądarkami nie obsługującymi JavaScriptów
var MSIE = navigator.appName == "Microsoft Internet Explorer"?true:false;
var NN = navigator.appName == "Netscape"?true:false;
function blockMouseClick(evt)
{
  if(MSIE && (event.button == 2)){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
  else if(NN && ((evt.which == 2) || (evt.which == 3))){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
}
document.onmousedown=blockMouseClick;
// Koniec kodu JavaScript -->
</SCRIPT>

	
</head>
	
	
<body onload="odliczanie();">

<div class="row6">
  <div class="col-sm">
  <a href="index.php" style="float: left">
		<font color="white"><h1>SIMPLY COOKING</h1></font>
		</a>
  </div>
  
  <div class="col-sm-elo">
  <h5> <div id="zegar"></div>  </h5> 
  
  <?php
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		echo "Witaj ".$_SESSION['user'].'  [<a href = "logout.php" style="color: black">Wyloguj się!</a>]<br />';
	}else{
		echo ' [<a href = "zarejestruj.php" style="color: black">Zarejestruj się!</a>]';
	}

?>

  </div>
</div>

<center>
<div class="col-sm">
<form action="logowanie.php" method="post">
<br/>
<h2>Zaloguj się ! </h2> <br/>
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" class="btn btn-primary" value="Zaloguj się" />
	
	</form>
	</div>
	</center>
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

	
	<footer>
	<center>
	<div class="row3">
	
		<div class="col" style="padding: 5px"">
		
				
					<a target="_blank"<a href="http://facebook.pl"><i class="icon-facebook"></i></a></a>
				
				</div>
		
		<div class="col" style="padding: 5px">
	
					<a target="_blank"<a href="http://youtube.pl"><i class="icon-youtube"></i></a></a>
				</div>
		
		
		<div class="col" style="padding: 5px">
					<a target="_blank"<a href="http://twitter.com/?lang=pl"><i class="icon-twitter"></i></a></a>
				</div>
		<div class="col" style="padding: 5px">
				<a target="_blank"<a href="http://plus.google.com/"><i class="icon-gplus"></i></a></a>
				</div>
				
	</div>
	</center>
	
	<div class="row4">
	<div class="col-sm">
				
					<header>
					<center>
				
						<h1>Kontakt z autorem</h1>
						
						<p>Jeśli masz ochotę podyskutować, zaproponować temat wpisu lub nawiązać współpracę reklamową - zapraszam do kontaktu mailowego, proszę jednak o wyrozumiałość co do czasu udzielenia przeze mnie odpowiedzi.</p>
						</div>
						</div>
						<br></br>
					</header>
					<div class="col">
					<center><a href="kontakt.php" style="text-align: center; text-decoration: none;" class="bluebutton">Nawiązanie współpracy</a></center>
					</div>
				</center>
				
	
		<div class="row4">
		<div class="col"><center>Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!</center></div>
			
			
		</div>
		
	
	</footer>


</body>
</html>