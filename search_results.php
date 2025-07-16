<?php // import hotels array and functions from utils folder

require "./utils/functions.php";
require "./utils/hotels_list.php";

?>

<?php // GET params

$parking = isset($_GET['hasParking']);

$vote = $_GET['vote'];

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Results | php Hotel</title>
  <link rel="stylesheet" href="./style/index.css">
</head>

<body>

  <div class="container">
    <h1>PHP Hotels</h1>

    <hr class="mt-5">

    <div class="hero">
      <h3>Search results</h3>
      <a href="/boolean/php-hotel/index.php" class="btn btn-secondary">Back</a>
    </div>

    <hr class="mb-5">

    <!-- table -->
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

          // retrieve hotel info with html
          $hotel_info = getHotelInfo($hotel);

          // check filters
          if ($parking && !$hotel['parking']) continue;
          if ($vote != "" && $hotel['vote'] < $vote) continue;

          // print table 
          showTable($hotel_info);
        }

        ?>

      </tbody>

    </table>

  </div>

</body>

</html>