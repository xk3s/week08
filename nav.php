<?php 
echo  "<ul class='nav'>";

for($i=0;$i<4;$i++){
    echo  "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
  }
   
echo "</ul>";
?>