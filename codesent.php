<?php session_start()?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
	
	<div class="col-md-6 well">
		<center>
		<h3>Send Mail To Gmail </h3></center>
			<form method="POST" action="mail.php">
				<div class="container">
					<label>Email:</label>
					<input type="email" placeholder="entrer votre email" name="email" required="required"/>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" placeholder="objet"  name="subject" required="required"/>
				</div>
				<!-- <div class="form-group">
					<label>Message</label>
					<input type="text" class="form-control" name="message" required="required"/>
				</div> -->
				<center>
				<!-- class="btn btn-primary"><span class="glyphicon glyphicon-envelope" </span> -->
					<button name="send"> envoyer</button>
					<button  onclick="location.href='Cv-darryl.php'" type="button" class="cancelbtn">Annuler</button>
				</center>
			</form>
			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>
</body>
</html>