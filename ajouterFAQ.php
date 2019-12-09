<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
    	    die('Erreur : '.$e->getMessage());
	} 


  	
	 $req = $bdd->prepare('INSERT INTO faq (question, réponse) VALUES(:Q,:R)'); 
	 $req->execute(array('Q'=>$_POST['question'],'R'=> $_POST['reponse']));
	header('Location: FAQadmin.php');
?>