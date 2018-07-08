<?php require_once("header.php");

$json = json_decode(file_get_contents($tokenjson), true);

if (isset($_GET['submit'])) {
  $coupon_id = $_GET['coupon'];

  $jsonfile = file_get_contents($tokenjson);
  $decoded = json_decode($jsonfile, true);

  $json = json_decode(file_get_contents($tokenjson), true);

  unset($decoded[$coupon_id]);
  file_put_contents($tokenjson, json_encode((array_values($decoded)), JSON_PRETTY_PRINT));

  header('Location: delete.php?token=' . $token);
}

if (isset($_GET['deleteall'])) {
  unlink($tokenjson);
  $fp = fopen($tokenjson, 'w');
  fwrite($fp, '[]');
  fclose($fp);

  header('Location: delete.php?token=' . $token);
}

?>

<div>
  <a href="index.php?token=<?=$token?>">Forside</a>
   -
  <a href="create.php?token=<?=$token?>">Tilføj kupon</a>
</div>

<?php
  if (isset($_GET['submit'])) {echo "<h4><font color='green'>Kupon slettet!</font></h4>";}
  if (isset($_GET['deleteall'])) {echo "<h4><font color='green'>Alle kupon slettet!</font></h4>";}
?>

<h2>Fjern kupon</h2>
  <form method="GET">
    <?php
      for ($i = 0; $i <= $countoffers-1; $i++) {
        echo '<label for="coupon' . $i . '"><input type="radio" name="coupon" id="coupon' . $i . '" value="' . $i . '" />' . json_decode(file_get_contents($tokenjson), true)[$i]['title'] . '</label>' . '<br/>';
      }
    ?>
    <input type="hidden" name="token" value="<?=$token?>" />
    <input type="submit" id="submit" name="submit" value="Slet enkelt" />
    <input type="submit" id="deleteall" name="deleteall" value="Slet alle" />
  </form>

<center>
</body>
</html>
