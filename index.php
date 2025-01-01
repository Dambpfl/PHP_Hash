<?php
session_start();

 $password = "monMotdePasse1234";
 $password2 = "monMotdePasse1234";

 // algorithme de hachage faible
 $md5 = hash('md5', $password);
 $md5_2 = hash('md5', $password2);
 echo $md5."<br>";
 echo $md5_2."<br>";

 $sha256 = hash('sha256', $password);
 $sha256_2 = hash('sha256', $password2);
 echo $sha256."<br>";
 echo $sha256_2."<br>";

 // algorithme de hachage fort
 $hash = password_hash($password, PASSWORD_BCRYPT);
 $hash2 = password_hash($password2, PASSWORD_DEFAULT);
 echo $hash."<br>";
 echo $hash2."<br>";

 // saisie dans le formulaire de login
 $saisie = "monMotdePasse1234";

 $check = password_verify($saisie, $hash);
 var_dump($check);

 $user = "Damien";

 if(password_verify($saisie, $hash)) {
    // echo "Les mots de passe correspondent !";
    $_SESSION["user"] = $user;
    echo $user." est connecté !";
 } else {
    echo "Les mots de passe sont différents !";
 }