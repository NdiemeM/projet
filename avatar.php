<?php
		//  session_start();
		include 'dbConnect.php';
		$user1=$connect->query("SELECT * FROM etudiant where id_etudiant='$_SESSION[id_etudiant];'");
			$user=$user1->fetch();
			if ($_SESSION['id_etudiant']=="") {
				header('location:log.php');
			}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


</head>
<style>
  .img{
   width:150px;
   height: 150px;
   border-radius: 50%;
   border: 3px solid black;
   margin-left: 20px;
  }
  .taillefont{
   font-size: 1.1 rem;
   text-transform: uppercase;
  }
</style>
<body>
<!-- <div class="container"> -->
  
      <!-- <div class="col-sm-0 col-md-3"></div> -->
      <!-- <div class="col-sm-0 col-md-4 ">
      </div> -->
      <div class="col-sm-12 col-md-3 mt-5 " style="overflow: auto; white-space: nowrap;"> 
      <img class="img" src="public/avatars/defaults/hijab4.jpg"  alt="image" />     

         <form method="post" action="avatarconnexion.php" enctype="multipart/form-data">
            <label for="file" style="margin-bottom: 0; margin-top: 40px;"> modifier votre photo de profil
            </label><br>
               <input id="file" type="file" name="file" class="hide-upload" /><br><br><br>
               <!-- <i class="fa fa-plus image-plus"></i> -->
               <input type="submit" style="margin-left: 40px; background: #261146;color: white; margin-top: -30px; width:130px;" class="btn " name="avatar" value="Envoyer">
         </form>
        
      <!-- <img src="hijab4.jpg" alt="image profil2" width="120" style="width: 100%"/> -->

      <h4 class="pp">Profil Personnel</h4>
        <div class="profilliste mt-5 ml-1">
        <div class="taillefont id"><p>ID : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['id_etudiant'] ?></span> <br></p></div><hr>
        <!-- <div class="nom"><p>Nom : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 1 rem;text-transform: uppercase"><?= $user['nom'] ?></p></div><hr> -->
        <!-- <div class="prenom"><p>Prenom : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="font-size: 1 rem;text-transform: uppercase"><?= $user['prenom'] ?></p></div><hr> -->
        <div class="taillefont date_naissance"><p>Date de naissance : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['date_naissance'] ?></p></div><hr>
        <div class="taillefont tel"><p>Telephone : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['tel'] ?></p></div><hr>
        <div class="taillefont adresse"><p>Adresse : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['adresse'] ?></p></div><hr>
        <div class="taillefont cni"><p>N° CNI : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['cni'] ?></p></div><hr>
        <div class="mail"><p>Email : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="font-size: 1.1 rem;text-transform: lowercase"><?= $user['mail'] ?></p></div><hr>
        <div class="taillefont filiere"><p>Filière : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['id_filiere'] ?></p></div><hr>
        <div class="taillefont niveau"><p>Niveau : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?= $user['id_niveau'] ?></p></div><hr>
        <!-- <div class="sexe"><p>Sexe : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="font-size: 1 rem;text-transform: uppercase"><?= $user['avatar'] ?></p></div> -->
      
        <input type="submit" style="margin-left: 40px; background: #261146;color: white;  width:220px;" class="btn " name="modifier" value="Modifier le mot de passe ">

      
      </div>
  </div>
<!-- </div>  -->
</body>
</html>