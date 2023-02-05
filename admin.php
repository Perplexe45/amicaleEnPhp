<?php
	session_start();
	$message = '';
	require_once('connexion.php');
	if(isset($_POST['login'])) {
	// Si PSEUDO ou PASSWORD est vide	
		if(empty($_POST['pseudo']) || empty($_POST['password'])) {
			$message = 'Merci de remplir les champs du formulaire';
		} else { // Si PSEUDO et PASSWORD sont remplis
			$sql = "SELECT * FROM administrateur
			WHERE pseudo = :pseudo AND password = :password";
			$req = $cnx->prepare($sql);
			$req->execute(
				array('pseudo'   => $_POST['pseudo'],
						'password' => $_POST['password'])
			);
			$count = $req->rowcount();
	// Si le couple Pseudo/Password est trouvé		
			if($count > 0) {
				$_SESSION['pseudo'] = $_POST['pseudo']; 
				
				$donnee = $req->fetch(PDO::FETCH_ASSOC);
				$_SESSION['id'] = $donnee['id'];
				
				header('location:listeUser/');
			} else {
	// Si le couple Pseudo/Password N'est PAS trouvé
				$message = 'Accès refusé !';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">
	
	<script src="https://kit.fontawesome.com/6ddde329a5.js" crossorigin="anonymous"></script>
	<title>L'amicale du liège</title>
</head>

<?php require_once('src/header.php'); ?>

<body>

	<section>
		<div id="login-body">
			<form method="post" action="admin.php">
				<input type="email" name="email" placeholder="Votre adresse email" required />
				<input type="password" name="password" placeholder="Mot de passe" required />
				<button type="submit">S'identifier</button>
			</form>
		</div>
	</section>

	<?php require_once('src/footer.php'); ?>
</body>

</html>