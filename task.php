<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<table border="1">
    <?php
     for ($row=1;$row<=8;$row++) {
        echo "<tr>";
         for ($column=1;$column<=8;$column++){

            $total = $column + $row;
            if($total%2 == 1){

                echo "<td style='background:black'>".$total."</td>";   
            }else{
                echo "<td style='background:white'>".$total."</td>";
            }
         }

         echo "</tr>";
        //  echo "<br>";
     } 
     
     ?>    
</table>

</body>
</html>