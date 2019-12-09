<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
    	    die('Erreur : '.$e->getMessage());
	} 


  	
	 $req = $bdd->prepare('DELETE FROM faq WHERE id=:I'); 
	 $req->execute(array('I' => $_POST['idSuppr']));
	header('Location: FAQadmin.php');
?>