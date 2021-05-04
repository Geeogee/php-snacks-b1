<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <?php
        // GOAL:
        // Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
        // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
        // Stampiamo a schermo tutte le partite con questo schema.

        $matches = [

            [
                "home" => "Olimpia",
                "guest" => "Virtus Bologna",
                "homePoints" => 66,
                "guestPoints" => 50
            ],

            [
                "home" => "Cantù",
                "guest" => "Varese",
                "homePoints" => 106,
                "guestPoints" => 102
            ],

            [
                "home" => "Reggiana",
                "guest" => "Virtus Roma",
                "homePoints" => 86,
                "guestPoints" => 77
            ],

            [
                "home" => "Aquila Trento",
                "guest" => "Godo",
                "homePoints" => 70,
                "guestPoints" => 85
            ],

            [
                "home" => "Brindisi",
                "guest" => "Victoria",
                "homePoints" => 86,
                "guestPoints" => 99
            ],

        ];

    ?>

    <div class="container">
            <?php

                for ($i=0; $i<count($matches); $i++) {

                    $match = $matches[$i];
                    echo "
                        <div class='match'>
                            <div class='team'>"
                                . $match['home'] 
                            . "</div> 
                            <div class='team'>"
                                . $match['guest']
                            . "</div> 
                            <div class='score'>"
                                . $match['homePoints']
                            . "</div> 
                            <div class='score'>"
                                . $match['guestPoints']
                            . "</div>"
                        . "</div>";
                }
            ?>
    </div>
    
</body>
</html>