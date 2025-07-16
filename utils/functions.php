<?php

// set table variables
function getHotelInfo($hotel)
{
  $title = "<td>$hotel[name]</td>";
  $description = "<td>$hotel[description]</td>";
  $parking_td = "<td class='text-center'>" . ($hotel['parking'] ? "✔️" : "❌") . "</td>";
  $vote_td = "<td class='text-center'>$hotel[vote]</td>";
  $distance = "<td class='text-end'>$hotel[distance_to_center] km</td>";

  return [
    "name" => $title,
    "description" => $description,
    "parking" => $parking_td,
    "vote" => $vote_td,
    "distance_to_center" => $distance
  ];
}


function showTable($hotel_info)
{
  echo "<tr>";
  echo join("", $hotel_info);
  echo "</tr>";
}
