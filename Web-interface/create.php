<?php require_once("header.php");
  if (isset($_GET['submit'])) {
    $expireafter = $_GET['expireafter'];
    if(empty($expireafter)) $expireafter = 3;
    $start = date('Y-m-d\TH:i:s\Z');
    $end = date('Y-m-d\TH:i:s\Z', strtotime('+'.$expireafter.' days', strtotime(date('Y-m-d\TH:i:s\Z'))));

    $json = json_decode(file_get_contents($tokenjson), true);
    $skeleton = json_decode(file_get_contents('./coupons/skeleton.json'), true);

    $skeleton['image'] = "op".$_GET['coupon_id']."_da-3.png";
    $skeleton['offerInstanceUniqueId'] = $GUID;
    $skeleton['title'] = $_GET['title'];
    $skeleton['description'] = $_GET['description'];
    $skeleton['startDate'] = $start;
    $skeleton['endDate'] = $end;

    $json[] = $skeleton;
    file_put_contents($tokenjson, json_encode($json, JSON_PRETTY_PRINT));

    header('Location: create.php?token='.$token);
  }
?>

<div>
  <a href="index.php?token=<?=$token?>">Forside</a>
   -
  <a href="delete.php?token=<?=$token?>">Slet kupon</a>
</div>

<?php if (isset($_GET['submit'])) {echo "<h4><font color='green'>Kupon tilføjet!<br>".$_GET['title']."</font></h4>";} ?>
<h2>Tilføj kupon</h2>
  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="2 for 1 mellem Pommes Frites" />
    <input type="hidden" name="coupon_id" value="524" />
    <input type="hidden" name="title" value="2 for 1 mellem Pommes Frites" />
    <input type="hidden" name="description" value="Køb en mellem Pommes Frites og få en gratis. Gælder løbende dag + 3 dage efter udstedelsesdato" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Hamburger til kun 5 kr." />
    <input type="hidden" name="coupon_id" value="516" />
    <input type="hidden" name="title" value="Hamburger til kun 5 kr." />
    <input type="hidden" name="description" value="Du har vundet en Hamburger til kun 5 kr." />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Gratis mellem pommes frites" />
    <input type="hidden" name="coupon_id" value="512" />
    <input type="hidden" name="title" value="Gratis mellem pommes frites" />
    <input type="hidden" name="description" value="Du har vundet en gratis mellem pommes frites" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Få 2 store pommes frites for 1 stor pommes frites pris" />
    <input type="hidden" name="coupon_id" value="525" />
    <input type="hidden" name="title" value="Få 2 store pommes frites for 1 stor pommes frites pris" />
    <input type="hidden" name="description" value="Du har vundet en gratis stor pommes frites ved køb af en stor pommes frites" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Gratis Cheeseburger" />
    <input type="hidden" name="coupon_id" value="511" />
    <input type="hidden" name="title" value="Gratis Cheeseburger" />
    <input type="hidden" name="description" value="Du har vundet en gratis Cheeseburger" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Big Mac til kun 15 kr." />
    <input type="hidden" name="coupon_id" value="521" />
    <input type="hidden" name="title" value="Big Mac til kun 15 kr." />
    <input type="hidden" name="description" value="Du har vundet en Big Mac til kun 15 kr." />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Chili Cheese Tops til kun 5 kr." />
    <input type="hidden" name="coupon_id" value="518" />
    <input type="hidden" name="title" value="Chili Cheese Tops til kun 5 kr." />
    <input type="hidden" name="description" value="Du har vundet en pose Chili Cheese Tops (3stk) till kun 5 kr." />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Gratis Chili Cheese Tops" />
    <input type="hidden" name="coupon_id" value="515" />
    <input type="hidden" name="title" value="Gratis Chili Cheese Tops" />
    <input type="hidden" name="description" value="Du har vundet en gratis pose Chili Cheese Tops (3stk)" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Gratis Chicken McNuggets" />
    <input type="hidden" name="coupon_id" value="513" />
    <input type="hidden" name="title" value="Gratis Chicken McNuggets" />
    <input type="hidden" name="description" value="Du har vundet en gratis pose Chicken McNuggets (4stk)" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Chicken McNuggets til kun 10 kr." />
    <input type="hidden" name="coupon_id" value="520" />
    <input type="hidden" name="title" value="Chicken McNuggets til kun 10 kr." />
    <input type="hidden" name="description" value="Du har vundet en pose Chicken McNuggets (4stk) till kun 10 kr. " />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="McFlurry 15 kr." />
    <input type="hidden" name="coupon_id" value="522" />
    <input type="hidden" name="title" value="McFlurry 15 kr." />
    <input type="hidden" name="description" value="Du har vundet en valgfri McFlurry til kun 15 kr." />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Gratis mellem sodavand" />
    <input type="hidden" name="coupon_id" value="509" />
    <input type="hidden" name="title" value="Gratis mellem sodavand" />
    <input type="hidden" name="description" value="Du har vundet en gratis valgfri mellem sodavand" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Få en gratis Cheeseburger ved køb af en mellem sodavand" />
    <input type="hidden" name="coupon_id" value="528" />
    <input type="hidden" name="title" value="Få en gratis Cheeseburger ved køb af en mellem sodavand" />
    <input type="hidden" name="description" value="Du har vundet en gratis Cheeseburger ved køb af en mellem sodavand" />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Cheeseburger til kun 5 kr." />
    <input type="hidden" name="coupon_id" value="517" />
    <input type="hidden" name="title" value="Cheeseburger til kun 5 kr." />
    <input type="hidden" name="description" value="Du har vundet en Cheeseburger til kun 5 kr. " />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

  <form method="GET" class="auto" autocomplete="off">
    <label>Udløb efter
      <select <input  name="expireafter"  >
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select> dage:
    </label>
    <input type="submit" name="submit" value="Ekstra Puzzle Kupon!" />
    <input type="hidden" name="coupon_id" value="531" />
    <input type="hidden" name="title" value="Ekstra Puzzle Kupon!" />
    <input type="hidden" name="description" value="Tillykke med at have gennemført vores puslespil – her er en ekstra tillykke-kupon, med en gratis, valgfri mellem sodavand." />
    <input type="hidden" name="token" value="<?=$token?>" />
  </form>

</center>
</body>
</html>
