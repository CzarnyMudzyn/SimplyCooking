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
		echo ' [<a href = "premium.php" style="color: black">PRZEPISY PREMIUM!</a>]';
	}else{
		echo ' [<a href = "zaloguj.php" style="color: black">Zaloguj się!</a>] <br/>';
		echo ' [<a href = "zarejestruj.php" style="color: black">Zarejestruj się!</a>]';
	}

?>
  </div>
</div>





<script type="text/javascript" charset="utf-8">  <!-- najlepszy przepis -->
 var int=self.setInterval("migaj()",3000);
 function migaj(){
   $('.migotanie').fadeOut('normal', function() {
     $('.migotanie').fadeIn('normal');
   });
 }
</script>

<center><span class="migotanie">NAJELPSZY PRZEPIS!!!</span></center>

<div class="row2">
	<div class="col-sm">
		<div class="przepis">
			<center><h1>Musli</h1></center>
			</div>
</div>
</div>
<div class="row2">
	<div class="col-sm">
	<div class="przepis2">
	<ul class="list-group">
	<li class="list-group-item"><h5>Przygotowanie krok po kroku:<h5></li>
  <li class="list-group-item">Wszystkie składniki z wyjątkiem owoców suszonych wymieszaj w misce i rozłóż na blasze.</li>
  <li class="list-group-item">Wstaw do piekarnika rozgrzanego do 180˚C i piecz około pół godziny, co jakiś czas mieszając je drewnianą łyżką. Gotowe musli powinno mieć delikatnie złocisty kolor.</li>
  <li class="list-group-item">Gdy wystygnie, dodaj pokrojone na kawałki owoce, jeszcze raz wymieszaj i przełóż do słoików. Powinno się przechowywać je w lodówce, wtedy musli dłużej zachowa świeżość.</li>
</ul>

	</div>

</div>

<div class="col-sm">
<div class="przepis2">
<div class="container">
           
  <table class="table table-dark">
  <script><!-- odhaczanie produktów -->
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script> 

    <thead>
      <tr>
        <th><h5>Składniki</h5></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p>400 g żytnich bądź owsianych płatków błyskawicznych</p></td>
        
      </tr>
      <tr>
        <td><p>300 g potłuczonych w moździerzu na średnie kawałki orzechów (połącz na przykład laskowe, włoskie, nerkowce i migdały)</p></td>
        
      </tr>
      <tr>
        <td><p>300 g suszonych owoców (według uznania – rodzynek, moreli, daktyli)</p></td>
        <tr>
		<td> <p>100 g różnych nasion (słonecznika, dyni, sezamu oraz – koniecznie – siemię lniane)</p>
		</tr>
		 <tr>
		<td> <p>100 g wiórków kokosowych</p>
		</tr>
		 <tr>
		<td><p> 2 łyżeczki cynamonu</p>
		</tr>
		 <tr>
		<td><p> 150 ml miodu i tyle samo oleju słonecznikowego lub oliwy z oliwek</p>
		</tr>
      </tr>
    </tbody>
  </table>
</div>

</div>
</div>
</div>

</div>

 

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
		<div class="col"><center>Wszelkie prawa zastrzeżone &copy; 2018 Dziękuję za wizytę!</center></div>
			
			
		</div>
		
	
	</footer>


</body>
</html>