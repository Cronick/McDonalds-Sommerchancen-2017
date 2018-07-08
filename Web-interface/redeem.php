<?php

header('Content-type: application/json; charset=utf-8');
$data = json_decode(file_get_contents('php://input'), true);

$coupon_id = $data["offerInstanceUniqueId"];

$token = str_replace("bearer ", "", $_SERVER['HTTP_ID']);
$tokenjson = './coupons/' . $token . '.json';

$time = date('Y-m-d\TH:i:s\Z');
$time2 = date('Y-m-d\TH:i:s\Z', strtotime('+10 minutes', strtotime(date('Y-m-d\TH:i:s\Z'))));

$json = json_decode(file_get_contents($tokenjson), true);

for($i = 0; $i < count($json); $i++) {
  if($json[$i]['offerInstanceUniqueId'] == $coupon_id) {
    $array = array(
        "id" => 999,
        "title" => $json[$i]['title'],
        "description" => $json[$i]['description'],
        "offerId" => 999,
        "startDate" => $json[$i]['startDate'],
        "endDate" => $json[$i]['endDate'],
        "termsAndConditions" => "Tilbuddet \"".$json[$i]['title']."\" kan ikke kombineres med andre tilbud. Kun én kupon pr. køb. Der tages forbehold for udsolgte varer. Lokale afvigelser kan forekomme. Tilbuddet er gyldigt løbende dag + 3 dage fra den dag du vinder eller så længe lager haves.",
        "redemptionText" => "252070",
        "redemptionImage" => null,
        "merchantId" => 564,
        "venueIds" => null,
        "codeType" => 4,
        "lastUpdatedAt" => $json[$i]['lastUpdatedAt'],
        "paymentProviderSuccessUrl" => null,
        "isAGift" => false,
        "giftId" => null,
        "giftBatchId" => null,
        "giftedOnDate" => null,
        "giftedByConsumerId" => null,
        "offerInstanceUniqueId" => $json[$i]['offerInstanceUniqueId'],
        "burnt" => false,
        "burntAt" => null,
        "redeemedAt" => $time,
        "isReward" => true,
        "redemptionTextExpiry" => $time2,
        "promoImagePath" => $json[$i]['image'],
        "promoImageDescription" => null,
        "altImageDescription" => null,
        "altImagePath" => null
    );
    echo json_encode($array);
    unset($json[$i]);
    file_put_contents($tokenjson, json_encode((array_values($json)), JSON_PRETTY_PRINT));
  }
}

?>
