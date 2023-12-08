<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet"  href="<?php echo base_url(); ?>css/style.css"  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
</head>
<body>


<div class="ensemble">
	<div class="form-structor">
		<div class="signup">
			<h2 class="form-title" id="signup"><span>ou</span>Créer un compte</h2>
			
			<div class="form-holder">
				
				<input name="login" type="text" class="input" placeholder="Nom d'utilisateur"/>
				<input name="nom" type="text" class="input" placeholder="Nom" />
				<input name="prenom" type="text" class="input" placeholder="Prenom"/>
				<input name="ddn" type="date" class="input" placeholder="Prenom"/>
				<input name="email" type="email" class="input" placeholder="Email"/>
				<input name="mdp" type="password" class="input" placeholder="Mot de passe" />
				
			</div>
			<button class="submit-btn"> Créer mon compte </button>
		</div>
</div>		
		
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>ou</span>Connexion</h2>
				<div class="form-holder">
					<input type="email" class="input" placeholder="Email" />
					<input type="password" class="input" placeholder="Mot de passe" />
				</div>
				<button class="submit-btn">connexion</button>
			</div>
		</div>
	</div>
    
</body>
</html>




