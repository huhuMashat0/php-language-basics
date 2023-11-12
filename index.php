<?php
   /*
    *   LOGICAL OPERATORS
   */


   $php = true;
   $ruby = false;

   //OR (|| - or)
   $canApply = $php || $ruby;

   //And (&& - and)
   $canApply = $php && $ruby;

   // Not !
   echo !$canApply;
?>