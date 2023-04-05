<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <script src="style.js" defer></script>
    <title>Document</title>
</head>
<body>
<input type="checkbox" id="active">
            <label for="active" class="menu-btn"><span></span></label>
            <label for="active" class="close"></label>
            <div class="wrapper">
              <ul class="galere">
        <li><a href="index.php">Contact</a></li>
        <li><a href="index.html">Galerie</a></li>
        </ul>
        </div>



    

<div class="container">
  <h1>Formulaire de contact</h1>
  <form action="envoie-d'email.php" method="post">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="nom" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
<input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

<label for="emailAddress">Email</label>
<input id="emailAddress" type="email" name="email" placeholder="Votre email">


<label for="subject">Message</label>
<textarea id="subject" name="message" placeholder="Votre message" style="height:200px"></textarea>

<input type="submit" value="Envoyer">
<button><a href="index.html">annulé</a></button>
    
    
  </form>
</div>
     
</body>
</html>