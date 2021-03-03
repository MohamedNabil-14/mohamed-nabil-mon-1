<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>answer num 6</title>
  </head>
  <body>
    
    <?php

        $employees=
        
        [
       'ahmed hamdy' =>[
               'job' => 'front-end',
              'experience' => 3
             ],
          
     'mohammed shaker' =>  [
                 'job' => 'back-end',
                 'experience' => 2
             ],
          
           'ali hasan' =>[
                 'job' => 'full-stack',
                 'experience' => 4
             ],
         ];
          
        

        echo "<div class='container'>";
        echo "<div class='row '>";

        foreach($employees as $employee =>$value)
        {

        echo "<div class='col-md-4' >";
        echo 
        "
        <div class='card' style='width: 18rem;'>
        <div class='card-body'>
        <h5 class='card-title'>".$employee."</h5>
        <h6 class='card-subtitle mb-2 text-muted'>".$value['job']."</h6>
        <p class='card-text'>".$value['experience']." Years of experience"."</p>

        </div>
        </div>
        ";

        echo "</div>";

        }

        echo "</div>";
        echo "</div>";

    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  </body>
</html>

















