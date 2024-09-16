<?php

session_start();

   if (!isset($_SESSION['id'])){
       header('location:\index.php');//barra invertida vai pra raiz
   }