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

$park_check = $_GET["park"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool B/B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>




    <form action="" method="get">
        <input type="text" name="park" id="">
        <button type="submit">Cerca</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
            </tr>
        </thead>

        <tbody>

            <?php if ($park_check == "parcheggio") : ?>

                <?php foreach ($hotels as $hotel) : ?>

                    <?php if ($hotel["parking"] == true) : ?>
                        <tr>
                            <td><?= $hotel["name"] ?></td>
                            <td><?= $hotel["description"] ?></td>
                            <td> <?php if ($hotel["parking"] == true) : ?>
                                    "Possibilità di parcheggio";

                                <?php else : ?>
                                    "Non siamo attrezzati per questo";

                                <?php endif; ?>
                            </td>
                            <td><?= $hotel["vote"] ?></td>
                            <td><?= $hotel["distance_to_center"] ?> Km</td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>



            <?php else : ?>

                <?php foreach ($hotels as $hotel) : ?>

                    <tr>
                        <td><?= $hotel["name"] ?></td>
                        <td><?= $hotel["description"] ?></td>
                        <td> <?php if ($hotel["parking"] == true) : ?>
                                "Possibilità di parcheggio";

                            <?php else : ?>
                                "Non siamo attrezzati per questo";

                            <?php endif; ?>
                        </td>
                        <td><?= $hotel["vote"] ?></td>
                        <td><?= $hotel["distance_to_center"] ?> Km</td>
                    </tr>

                <?php endforeach; ?>


            <?php endif; ?>
        </tbody>

    </table>


</body>

</html>