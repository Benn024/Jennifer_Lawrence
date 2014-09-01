<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mening = "Hej! ";
            $mening2 = "Du är ganska ful ";
            $mening3 = "pga av att du ser ut som Truls!";
            $mening4 = $mening;
            $mening4 .= $mening2;
            $mening4 .= $mening3; 
            echo $mening4;
         
            
            
        ?>
        <br>
        <?php echo strstr($mening4, "Truls!");  ?><br />
        <?php echo substr($mening4, 12, 3)?><br />
        
        <?php   
            if($mening == "Hej! "){
                echo "Fyfan va gött!";
            }
            else{
                echo "Nämen det var trist";
            }
        ?>
    </body>
</html>
