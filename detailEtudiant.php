<?php
$nav = 'gerer';
$title = 'Détails Etudiant';
// session_start();

// On inclut la connexion à la base
require_once('dbConnect.php');

if(isset($_GET['id_etudiant']) && !empty($_GET['id_etudiant'])){
    $id = strip_tags($_GET['id_etudiant']);
    // On écrit notre requête
    $sql = "SELECT * FROM etudiant WHERE id_etudiant =:id_etudiant";

    // On prépare la requête
    $query = $connect->prepare($sql);

    // On attache les valeurs
    $query->bindValue(':id_etudiant', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $etudiant = $query->fetch();

    if(!$etudiant){
        header('Location: lister.php');
    }
}else{
    header('Location: EspaceAdmin.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body >

<?php
include 'menuNav.php';
?>



<div class="row">

<?php
// include 'profilAdmin.php';
?>

<?php
// ========================================filiere=============
if($etudiant['id_filiere']  == 3){
    $filiere = 'Développement Web/Mobile';
}
if($etudiant['id_filiere']  == 1){
    $filiere = 'Réseaux & télécoms';
}
if($etudiant['id_filiere']  == 2){
    $filiere = 'Gestion';
}
if($etudiant['id_filiere']  == 4){
    $filiere = 'Banque Assurance';
}
// ====================================niveau===========================

if($etudiant['id_niveau']  == 1){
    $niveau = 'Licence 1';
}
if($etudiant['id_niveau']  == 2){
    $niveau = 'Licence 2';
}
if($etudiant['id_niveau']  == 3){
    $niveau = 'Licence 3';
}
if($etudiant['id_niveau']  == 4){
    $niveau = 'Master 1';
}
if($etudiant['id_niveau']  == 5){
    $niveau = 'Master 2';
}

// echo $_SESSION;
?>




<div class="container col-md-9 col-sm-12 epaisseur1 downIns">
        <div class="panel panel-info">
            <div class="panel-heading ligneIns text-center"><h1>Détails de l'étudiant</h1></div>
            <div class="panel-body mt-5 text-center detail">
            
    <h4>ID : &nbsp;&nbsp; <?= $etudiant['id_etudiant'] ?></h4>
    <h4>Prénom :&nbsp;&nbsp; <?= $etudiant['prenom'] ?></h4>
    <h4>Nom :&nbsp;&nbsp; <?= $etudiant['nom'] ?></h4>
     <h4>Email :&nbsp;&nbsp; <?= $etudiant['mail'] ?></h4>
      <h4>Téléphone :&nbsp;&nbsp; <?= $etudiant['tel'] ?></h4>
      <h4>Date de naissance :&nbsp;&nbsp; <?= $etudiant['date_naissance'] ?></h4>
      <h4>Adresse :&nbsp;&nbsp; <?= $etudiant['adresse'] ?></h4>
       <h4>Login :&nbsp;&nbsp; <?= $etudiant['login'] ?></h4>
       <h4>Filière :&nbsp;&nbsp; <?= $filiere ?></h4>
       <h4>Niveau :&nbsp;&nbsp; <?= $niveau ?></h4>
       <!-- <h4>Sexe :&nbsp;&nbsp; <?= $etudiant['sexe'] ?></h4> -->
       <h4>N° CNI :&nbsp;&nbsp; <?= $etudiant['cni'] ?></h4>
    <p class="mt-5">
    <a class="btn btn-dark" href="modifiEtudiant.php?id_etudiant=<?= $etudiant['id_etudiant'] ?>">Modifier</a> 
    <a class="btn btn-dark" href="supprimEtudiant.php?id_etudiant=<?= $etudiant['id_etudiant'] ?>">Supprimer</a>
    
    <a class="btn btn-dark" href="lister.php">Retour à la liste</a>
    </div></div></div></div></div>

    <!-- <div class="text-center">
    <p><a class="btn btn-secondary" href="inscription.php">Ajouter un apprenant</a></p>
    <p>ou</p>
    <p><a class="btn btn-info" href="EspaceAdmin.php">Retourner à l'accueil</a></p> 
    </div> -->

    <?php
include 'megafooter.php';
?>
</body>
</html>


