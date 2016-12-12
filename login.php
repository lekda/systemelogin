<?php
session_start();
$db=mysql_connect('localhost', 'root', '');
mysql_select_db('login');

if(isset($_POST['submit'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if($password==$password2){
	$password=md5($password);
	$sql="INSERT INTO utilisateurs(nom, prenom, mail, password) VALUES('$nom', '$prenom', '$mail', '$password')";
	mysql_query($sql, $db);
	$_SESSION['message']="Bienvenue, " ;
	$_SESSION['prenom']=$prenom;
	header('location:accueil.php');
	}else{
		$_SESSION['message']="Veuillez retaper votre mot de passe";
	}
}
?>	

<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Site généraliste</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2016 site" /> 
<meta name="author" content="auteur" /> 
<meta name="reply-to" content ="site@site.fr" /> 
<meta name="description" content="e-commerce"/> 
<meta name="keywords" content="e-commerce"/> 
</head>

<body>

<div id="header">
</div>

<div id="menu">

</div>

<div id="corps">
<h1>Enregistrez-vous</h1>
<form action="login.php" method="POST">
Nom : <input type="text" name="nom"><br/>
Prénom : <input type="text" name="prenom"><br/>
Mail : <input type="email" name="mail"><br/>
Mot de passe : <input type="text" name="password"><br/>
Retapez le mot de passe : <input type="text" name="password2"><br/>
<input type="submit" name="submit" value="Soumettre"><br/>
</form>
</div>
	
<div id="foot">
</div>	

</body>
</html>
