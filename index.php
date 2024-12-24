<?php

 $password = "monMotdePasse1234";
 $password_2 = "monMotdePasse1234";

 // algo de hachage faible
 $md5 = hash('md5', $password);
 $md5_2 = hash('md5', $password_2);
 echo $md5."<br>";
 echo $md5_2."<br>";

 $sha256 = hash('sha256', $password);
 echo $sha256."<br>";

 