<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="ConnexionCSS.css" media="screen" type="text/css" />
    </head>
    <body background="Background.jpg">
        <div id="container">
            
            <form action="#" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur ou adresse mail</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='Se connecter'  >
				<input type="submit" id='submit' value="Se connecter en tant qu'administrateur  " >
                
            </form>
        </div>
    </body>
</html>
