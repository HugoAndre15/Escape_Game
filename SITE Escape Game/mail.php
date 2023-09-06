<?php
  //mail pour Nous
  $Nom = $_POST['Nom'];
  $Email = $_POST['Email'];
  $Objet = $_POST['Objet'];
  $Message = $_POST['Message'];
  $Téléphone = $_POST['Téléphone'];
  $Adresse = $_POST['Adresse'];


  $dest = "Ultimate.Escape13@gmail.com";
  $sujet = "Message reçu : ".$Objet;
  $corp = "Voici le message de M. ou Mme. ".$Nom.":<br>".$Message."<br><br> Pour la recontacter, voici quelques informations: <br> Téléphone: ".$Téléphone."<br>Adresse: ".$Adresse."<br>Mail: ".$Email."<br><br> Pour retourner sur le site, cliquez sur le lien ci-dessous: <br> <a href='http://localhost/SITE/contact.html'> Retour sur la page de contact</a>";
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers .= "From: ".$Email;


  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest... <br>";
  } 

  else {
    echo "Échec de l'envoi de l'email... <br>";
  }


//mail pour expéditeur
  $dest = $Email;
  $sujet = "Confirmation d'envoi";
  $corp = "Bonjour M. ou Mme. ".$Nom."<br>Nous avons bien reçu votre message sur notre site d'Escape Game. Merci d'avoir fait votre retour, nous espérons vous revoir bientôt. <br> Pour retourner sur le site, cliquez sur le lien ci-dessous: <br> <a href='http://localhost/SITE/contact.html'> Retour sur la page de contact</a>";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers .= "From: Ultimate.Escape13@gmail.com";


  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest... <br>";
  } 

  else {
    echo "Échec de l'envoi de l'email... <br>";
  }

  echo "<a href='http://localhost/SITE/contact.html'>Retour sur la page</a>";
  
?>