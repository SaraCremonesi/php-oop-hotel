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
      <?php $room = new Stanze ($room['id'], $room['room_number'], $room['floor'], $room['beds'], $room['created_at'], $room['updated_at']); ?>
      <?php $room_print = $room->getRoomData(); ?>
      <li>Id stanza: <?php echo $room_print['id']; ?></li>
      <li>Numero stanza: <?php echo $room_print['room_number']; ?></li>
      <li>Piano: <?php echo $room_print['floor']; ?></li>
      <li>Numero letti: <?php echo $room_print['beds']; ?></li>
      <li>Creata il: <?php echo $room_print['created_at']; ?></li>
      <li>Aggiornata il: <?php echo $room_print['updated_at']; ?></li>
    </ul>
      <?php } ?>
  </body>
</html>
