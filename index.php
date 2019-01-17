<?php

		session_start();
		unset($_SESSION['blad']);
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
		echo ' [<a href = "premium.php" style="color: black">PRZEPISY PREMIUM!</a>]';
	}else{
		echo ' [<a href = "zaloguj.php" style="color: black">Zaloguj się!</a>] <br/>';
		echo ' [<a href = "zarejestruj.php" style="color: black">Zarejestruj się!</a>]';
	}

?>
  
 
  </div>
</div>
<?php
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{

	}else
	{
		echo '<div id="blok">
    <p>Chcesz rządzić w kuchni? Dołącz do nas ! Zarejestruj się i uzyskaj dostęp do najlepszych przepisów!  </p>
  </div>';
	}
?>

<div class="row2">
<div class="col-sm">
<center>
<div class="nawigacja"> 	
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" style="height: 160px;" src="https://static.gotujmy.pl/ZDJECIE_PRZEPISU_ETAP/sniadanie-po-angielsku-467895.jpg" alt="Card image cap">
	<div class="card-body">
		<h5 class="card-title">ŚNIADANIE</h5>
		<p class="card-text">Najważniejszy posiłek dnia, dlatego sie nie spiesz i zjedz je w spokoju .</p>
		<a href="sniadanie.php" class="btn btn-primary">Pyszne śnaidania!</a>
	</div>
	</div>
</div>
</center>
</div>
<br></br>
<div class="col-sm">
<center>	
<div class="nawigacja"> 
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" style="height: 160px;" src="https://i.wpimg.pl/O/644x432/d.wpimg.pl/1831575938-1560570594/kotlet-schabowy.jpg" alt="Card image cap">
	<div class="card-body">
		<h5 class="card-title">OBIAD</h5>
		<p class="card-text">Dostarcza najwięcej kalorii i wartości odżywczych naszemu organizmowi. </p>
		<a href="obiad.php" class="btn btn-primary">Zdrowe obiady!</a>
	</div>
	</div>
</div>
</center>
</div>
<br></br>
<div class="col-sm">	
<center>
<div class="nawigacja"> 
	<div class="card" style="width: 18rem;">
	
		<img class="card-img-top" src="http://r-scale-60.dcs.redcdn.pl/scale/o2/tvn/web-content/m/p96/i/50905d7b2216bfeccb5b41016357176b/726ffe6a-9dc4-11e2-94b0-0025b511229e.jpg?type=1&srcmode=0&srcx=7%2F10&srcy=44%2F100&srcw=95%2F100&srch=54%2F100&dstw=640&dsth=360&quality=85" alt="Card image cap">
	<div class="card-body">
		<h5 class="card-title">KOLACJA</h5>
		<p class="card-text">Lekka i pożywna kolacja kilka godzin przed snem - by w nocy nie podjadać :) </p>
		<a href="kolacja.php" class="btn btn-primary">Ciekawe kolacje!</a>
	</div>
	</div>
</div>
</center>
</div>
<br></br>
</div>

	
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
		<div class="col"><center>Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę! <br/>
		
		Ta strona została odwiedzona
<?php
$cfg['file'] = "licznik.txt"; // �cie�ka z plikiem
$cfg['read'] = file_get_contents($cfg['file']); // odczytuje plik

if(!isset($_COOKIE['licznik'])) {
   
    $fp = fopen($cfg['file'], "w"); // otwiera plik
    flock($fp, 2); // blokuje plik 
    fwrite($fp, $cfg['read']+1); // zapis do pliku
    flock($fp,3); // blokuje plik
    fclose($fp); // zamyka plik
}
    echo $cfg['read']; // wy�wietlenie liczby odwiedzin

?>
 razy .
</center></div>
		
			
			
		</div>
		
	
	</footer>


</body>
</html>