
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication</title>
</head>
<body>
    <table align="justify" border = "1" cellpaddding="3" cellspacing="1" >
    <?php

// answer of question 4 is

        for ($i=1; $i <=12 ; $i++) { 
            echo "<tr>";
        
            for ($j=1; $j <=12 ; $j++) { 
                echo "<td> $j * $i = ". $i*$j."</td>";
            }

            echo "</tr>";
        }


    ?>
    </table>

</body>
</html>

