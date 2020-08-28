<?php
  include __DIR__ . '/database.php';
  require_once(__DIR__ . '/Stanze.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stanze</title>
  </head>
  <body>
    <h1>Stanze Boolean Hotel</h1>
    <?php foreach ($rooms as $room) { ?>
    <ul>
      <?php $room = new Stanza($room['id'], $room['room_number'], $room['floor'], $room['beds'], $room['created_at'], $room['updated_at']) ?>
      <li><?php echo $room->getRoomData(); ?></li>
    </ul>
      <?php } ?>
  </body>
</html>
