<?php

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container-fluid border text-bg-primary p-3 text-center">
        <h1>TABELLA PHP CON CICLO FOREACH </h1>
    </div>
    <div class="container my-5">
        <table class='table'>
            <thead>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th class='border text-bg-primary p-3'>
                        <?php echo strtoupper($key); ?>
                    </th>
                <?php
                }
                ?>
            </thead>
            <tbody>
                <?php foreach ($hotels as $item) {  ?>
                    <tr>
                        <?php foreach ($item as $key => $value) { ?>
                            <td>
                                <?php
                                if ($key == 'parking') {
                                    if ($value == true) {
                                        $value = 's??';
                                    } else {
                                        $value = 'no';
                                    }
                                }

                                echo $value;


                                ?>
                            </td>
                        <?php } ?>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>