<?php


session_start();

if(session_destroy()){

   ?>

   <script src="script.js"></script>
   <script>window.location="index.php";</script>
   
   <?php
   

}

?>