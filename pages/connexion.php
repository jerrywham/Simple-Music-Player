<?php
    $no_header = true;
    if(isset($_COOKIE['smp_userconnect'])){
        $cookie = explode(';', $_COOKIE['smp_userconnect']);
        if(isset($cookie[0], $cookie[1]))
            header('Location: core/interact.php?action=connect&cookie=true&pseudo=' . $cookie[0] . '&password=' . $cookie[1]);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion - Simple Music Player</title>
	<link type="text/css" rel="stylesheet" href="core/css.php" />
	<script src="core/js.php"></script>
        <link rel="shortcut icon" type="image/png" href="theme/images/favicon.png" />
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
        <meta http-equiv=Content-Type content="text/html; charset=utf-8" />
    </head>
    <body id="bg_connexion">
	<?php
	    if(isset($_GET['erreur']))
		echo '<script type="text/javascript">document.body.onload = function(){afficher_message("Mauvais nom d\'utilisateur ou mot de passe incorrect", 10, 0);}</script>';
	?>
        <div id="notification">Erreur: Veuillez activer JavaScript!</div>
        
	<div id="connexion">
	    <h1>Connectez-vous</h1>
	    <form id="formulaire" action="core/interact.php?action=connect" method="post">
		<input type="text" name="pseudo" required placeholder="Nom d'utilisateur..." />
	        <input type="password" name="password" required placeholder="Mot de passe..." />
		<label><input type="checkbox" name="keep" /> Se souvenir de moi</label>
		<input type="submit" value="Connexion" />
	    </form>    
	</div>
	
	
	<script>masquer_message();</script>
    </body>
</html>
