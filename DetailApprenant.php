
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="DetailTuteur.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier Tuteur</title>
</head>
<body>



<div class="wrapper">
    <div class="title">
      Détail Apprenant
    </div>
    
    <div class="formDetail">
       
      
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOM</th>
      <th>PRENOM</th>
        <th>SEXE</th>
        <th>age</th>
        <th>ADRESSE</th>
         <th>TELEPHONE</th>
        <th>DIPLOME</th>
        <th>NIVEAU</th>
        <th>USERNAME</th>
       <th>PASSWORD</th>
       <th>DATE_D'ADHESION</th>
    </tr>
  </thead>
  <tbody>

<!--houna bech njibou donnee mel base w n7otouhom fil colonet mta3 table chna3mlou lconnexion w kol houna -->
<?php
include("dataBaseConnexion.php");
$id=$_GET['id'];
$sql="select * from apprenant where id =$id";
    

//$result hedhi chetraja3lek resultat lkol mta3 requete
$result= mysqli_query($conn,$sql);

if(!$result){
die("Invalid query !📛");
}
// 3melna boucle bech nraj3ou fih e donner
    while($row = mysqli_fetch_assoc($result)) {
     
    //afficher le donner
      echo"
  <tr>
      <th>$row[id]</th>
      <td>$row[nom]</td>
      <td>$row[prènom]</td>
      <td>$row[Sexe]</td>
       <td>$row[age]</td>
      <th>$row[Adresse]</th>
      <td>$row[téléphone]</td>
        <td>$row[diplome]</td>
         <td>$row[niveau]</td>
       <td>$row[username]</td>
      <th>$row[password]</th>
      <td>$row[date_dadhésion]</td>
      
    </tr>";
}
  ?>
  </tbody>
</table>





       <div class="inputfield">
        <a href="GererApprenant.php" class="cancell"> cancel </a>
       </div>


    </div>
   
</div>




</body>
</html>