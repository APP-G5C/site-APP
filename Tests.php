<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SmartBeing</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
  <?php include("header.php"); ?>
   <div class="bg">
        <form action="#" method="POST">
           <h2>Composez votre test</h2>
      

      
        <p>Stress</p>
                <div id="truc2">
                <input type="checkbox" id="cardio" name="test">
                 <label for="cardio">cardio</label>
                </div>
                <div id="truc2">
                 <input type="checkbox" id="cardio" name="test">
                 <label for="cardio">temperature de la peau</label>
                </div>

       
        <p>Troubles auditifs</p>
        <div id="truc2">
            <input type="checkbox" id="audition" name="audition" checked>
            <label for="audition">perception auditive</label>           
        </div>
        <div id="truc2">
                 <input type="checkbox" id="cardio" name="test">
                 <label for="cardio">reconnaissance tonalité</label>
        </div>


        <p>Capacité mémorielle</p>
        <div id="truc2">
            <input type="checkbox" id="memoire" name="memoire" checked>
            <label for="memoire">Reproduction de motif sonore</label>
        </div>
        
        <button class="button"><a href="explication.php" style="color:white; text-decoration:none" href="FAQ.html">Suivant</a></button>

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