<html>

	<head>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "contacterCSS.css"/>
        <title> SmartBeing </title>
    </head>

    

	<body>
        <?php include("header.php"); ?>
        <div class="bg">
            <form action="#" method="POST">
            <h2>NOUS CONTACTER</h2>
            <div class="line"></div>

			<label for="nom">Nom d'utilisateur </label>
			<input type="text" <id="nom" name="nom"><br>
			<label for="e-mail">E-mail</label>
			<input type="text" <id="e-mail" name="e-mail"><br>

			<label for="message">Votre message : </label>
			<textarea id="message"></textarea><br>

			<input type="submit" value="Envoyer">
		
        </form>
</div>
<style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        opacity: 0.5;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
        opacity : .5;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
        opacity: 0.5;

    }
</style>
	</body>

	<footer>
        <div id = "global">
            <div id = "Reseaux">
                <div id = "Facebook"> 
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "twitter-li-ma-3andiiich-m3ah.jpg">
                        </a>
                        <figcaption>Twitter</figcaption>
                    </figure>
                </div>
                
                <div id = "Instagram">
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "insta.png">
                        </a>
                        <figcaption>Instagram</figcaption>
                    </figure>
                </div>
                
                <div id ="Facebook">
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "fb.png">
                        </a>
                        <figcaption>Facebook</figcaption>
                    </figure>
                </div>
            </div>
            <a href = "NOMPAGE.html">
                <p> <u> CGU </u> </p>
            </a>
        </div>
    </footer>

</html>
