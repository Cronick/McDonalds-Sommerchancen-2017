<?php

$token = str_replace("bearer ", "", $_SERVER['HTTP_ID']);
$tokenjson = './coupons/' . $token . '.json';

header('Content-type: application/json; charset=utf-8');

if(!file_exists($tokenjson)) {
    $fp = fopen($tokenjson, 'w');
    fwrite($fp, '[]');
    fclose($fp);

    echo '[{"burntCount":0,"closestVenue":null,"distanceToClosestVenue":null,"giftBatchId":null,"giftedBy":null,"giftedByConsumerId":null,"giftedCopy":null,"giftedOnDate":null,"giftId":null,"isActive":true,"isAGift":false,"isMerchantFavourite":false,"lastBurntAt":null,"lastRedeemedAt":null,"offerInstanceUniqueId":"","redemptionCount":0,"categoryId":1,"categoryName":"Default","codeType":4,"contentTagReferenceCodes":["hidden_loyalty_card_reward"],"contentUrl":"","dailyEndTime":null,"dailyStartTime":null,"daysOfWeek":[],"description":"Klik på Panel i menuen for at tilføje din første kupon!","endDate":"2999-12-31T23:59:59Z","extendedData":null,"id":524,"image":"op524_da-3.png","imageAlt":null,"imageAltDescription":"","imageDescription":"","isAvailableAllStores":true,"isGiftable":false,"isPremiumPlacement":false,"isRespawningOffer":false,"isReward":true,"lastUpdatedAt":"2017-05-08T07:03:27Z","merchantId":564,"paymentAmount":null,"paymentTaxRate":0,"paymentType":0,"respawnsInDays":0,"sortOrder":0,"startDate":"2017-05-03T11:00:00Z","termsAndConditions":null,"title":"Proxy er sat korrekt op! Tryk her for at læse mere...","venueExternalIds":[],"venueIds":[],"weighting":0}]';
}

else {
    echo file_get_contents($tokenjson);
}


?>
