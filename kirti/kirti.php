<?php
 
   echo "<pre>";  
   $str = file_get_contents("http://www.tothenew.com/");
   
   if(preg_match_all("/<a href=\"(.*)\">(.*)<\/a>/", $str, $matches)){
       echo "Match found<br>Content that matches:<br>";
          if(isset($matches))
             print_r($matches);
          else
             echo"<br>NULL";
        
   }
   else
      echo"<br>NO match found";

   echo "</pre>";
?>

