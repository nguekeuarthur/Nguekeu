<!DOCTYPE html>
<html lang="en">
    

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" >
</head>
<body>
<center>
<h3>Envoi des information par Whatsapp</h3>
<form method="post" action="sendcodeZap.php">
<div class="container">
    <label>Telephone:</label>
    <input type="text"placeholder="Entrez Votre Numero" name="email" required="required"
    />
    <br>
    <label>Subject</label>
    <input type="text" placeholder=" le Sujet " name="subject" required="required"/>
</div>
<center>
    <button name="send">Send</button>
    <button onclick="location.href='index.php'" type="button" class="cancelbtn">Annuler</button>

</center>

</form>
</center>
<br/>


</body>
</html>