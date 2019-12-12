<html>

	<head>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "contact.css"/>
        <title> SmartBeing </title>
    </head>

    

	<body>
        <?php include("header.php"); ?>
        <div class="bg">
            <form action="#" method="POST">
            <h2>NOUS CONTACTER</h2>
            <div class="line"></div></br></br></br></br>

			<label for="nom" >Votre nom d'utilisateur : </label>
			<input type="text" style="font-size: 25px;"<id="nom" name="nom"><br>
			<label for="e-mail">E-mail du destinataire :</label>
			<input type="text" style="font-size: 25px;"<id="e-mail" name="e-mail"><br>

			<label for="message">Votre message : </label>
			<textarea id="message" style="font-size: 25px;"></textarea><br>

			<input type="submit" value="Envoyer" style=" 
            background-color: #a0ff23;
            border: none;
            color: black;
            padding: 10px 25px;
            text-align: center;
            font-size: 30px;
            cursor: pointer;
            display: block;
            margin : auto;
            margin-top:20px;
            margin-left:539px;
            border-radius: 5px;
            font-family: 'aileron_thin';">
		
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

	

</html>
