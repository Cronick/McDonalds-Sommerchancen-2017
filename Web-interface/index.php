<?php require_once("header.php") ?>

  <div>
    <a href="create.php?token=<?=$token?>">Tilføj kupon</a>
     -
    <a href="delete.php?token=<?=$token?>">Slet kupon</a>
  </div>

  <p>Du har <strong><?=($countoffers != 0 ? $countoffers : 'ingen')?></strong> <?=($countoffers == 1 ? 'aktiv kupon' : 'aktive kuponer')?></p>

  <?php
    for ($i = 0; $i <= $countoffers-1; $i++) {
      echo json_decode(file_get_contents($tokenjson), true)[$i]['title'] . '<br/>';
    }
  ?>

<center>
</body>
</html>
