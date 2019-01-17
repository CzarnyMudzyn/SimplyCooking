<?php

		session_start();
		unset($_SESSION['blad']);
		
		
			if (isset($_POST['email']))
	{
		
		$wszystko_OK=true;
		
		
		$nick = $_POST['nick'];
		
		
		if ((strlen($nick)<2) || (strlen($nick)>15))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Login musi posiadać od 2 do 15 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		
		
		
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				
				$rezultat = $polaczenie->query("SELECT id FROM login WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				
				$rezultat = $polaczenie->query("SELECT id FROM login WHERE login='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim loginie! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					
					
					if ($polaczenie->query("INSERT INTO login VALUES (NULL, '$nick', '$haslo1', '$email')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: index.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
		
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
	
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
	
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

<center>
<body>
	
	<form method="post">
	
		Login: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nick']))
			{
				echo $_SESSION['fr_nick'];
				unset($_SESSION['fr_nick']);
			}
		?>" name="nick" /><br />
		
		<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>
		
		E-mail: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" /><br />
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		
		Hasło: <br /> <input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1" /><br />
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>		
		
		Powtórz hasło: <br /> <input type="password" value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" name="haslo2" /><br />
		
		
		
		<br />
		
		<input type="submit" class="btn btn-primary" value="Zarejestruj się" />
		
	</form>

</body>

</center>



	
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