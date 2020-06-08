<?php

        $full_name = 'Maximillian Nodebe';
        $id = 'HNG-06278';
        $language = 'PHP';
        
      function printString() {
        global $full_name; 
        global $id;
        global $language;
        
      return "Hello world, this is $full_name with HNG id $id,
          using $language for stage 2 task.";
      }
      echo printString();
      
?>      
