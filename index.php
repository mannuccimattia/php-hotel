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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>php Hotel</title>
</head>

<body>

  <div class="container">
    <h1>PHP Hotels</h1>

    <hr class="my-5">

    <table class="table table-striped">

      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th class="text-center">Parking</th>
          <th class="text-center">Vote</th>
          <th class="text-end">Distance to Center</th>
        </tr>
      </thead>

      <tbody>

        <?php

        foreach ($hotels as $hotel) {
          // variables
          $title = "<td>$hotel[name]</td>";
          $description = "<td>$hotel[description]</td>";
          // $parking = "<td class='text-center'>$hotel[parking]</td>";
          $parking = "<td class='text-center'>" . ($hotel['parking'] ? "✔️" : "❌") . "</td>";
          $vote = "<td class='text-center'>$hotel[vote]</td>";
          $distance = "<td class='text-end'>$hotel[distance_to_center] km</td>";

          var_dump($hotel);

          // echo
          echo "<tr>";
          echo $title . $description . $parking . $vote . $distance;
        }

        ?>

      </tbody>

    </table>

  </div>
  </div>

</body>

</html>