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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>PHP Hotel</title>
    </head>
    <body>
        <h1>
            PHP Hotels
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th> # </th>
                    <?php 
                        $th = null;
                        if (count($hotels) > 0) {
                            $th = array_keys($hotels[0]);
                        };

                        foreach ($th as $header) {
                            echo '<th>'.$header.'</th>';
                        };
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($hotels as $index => $hotel) {
                        echo '<tr>';
                        echo '<th>'.($index + 1).'</th>';
                        echo '<td>'.$hotel['name'].'</td>';
                        echo '<td>'.$hotel['description'].'</td>';
                        echo '<td>'.($hotel['parking'] ? 'incluso' : 'non incluso').'</td>';
                        echo '<td>'.$hotel['vote'].'</td>';
                        echo '<td>'.$hotel['distance_to_center'].'</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>