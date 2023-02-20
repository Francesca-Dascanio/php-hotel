<?php 

    // DATI
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
    </head>
    <body>
        <h1>
            PHP Hotels
        </h1>
        <ul>
            <?php 
                foreach ($hotels as $hotel) {
                    echo '<div> Hotel info: ';
                    echo '<li> Name: '.$hotel['name'].'</li>';
                    echo '<li> Description: '.$hotel['description'].'</li>';
                    echo '<li> Parking: '.$hotel['parking'].'</li>';
                    echo '<li> Vote: '.$hotel['vote'].'</li>';
                    echo '<li> Distance to Center: '.$hotel['distance_to_center'].'</li>';
                    echo '</div>';
                    echo '<br>';
                }
            ?>
        </ul>
        <br>
    </body>
</html>