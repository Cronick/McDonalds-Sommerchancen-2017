<?php
  require_once("whitelist.php");

  if(empty($_GET['token'])) {
      echo "<meta charset='utf-8'>";
      echo "Luk venligst panelet og åben det igen.";
      die();
  }

  $token = $_GET['token'];
  $tokenjson = './coupons/' . $token . '.json';
  $countoffers = count(json_decode(file_get_contents($tokenjson), true));

  function getGUID() {
    if(function_exists('com_create_guid')) {
      return com_create_guid();
    } else {
      mt_srand((double)microtime()*10000);
      $charid = strtolower(md5(uniqid(rand(), true)));
      $hyphen = chr(45);
      $uuid = ""
        .substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12)
        ."";
      return $uuid;
    }
  }
  $GUID = getGUID();

  if(!array_key_exists($token, $whitelist)) {
    echo "<br><center><h2>Du er ikke whitelisted!</h2>Din auth-token er: ".$token."</center>";
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>McDonalds Offerings</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/css/uikit.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit-icons.min.js"></script>
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no">
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <h1 style="margin-top: 0px;">McDonalds Shellsec Proxy</h1>
