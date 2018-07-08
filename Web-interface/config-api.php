<?php
  $token = str_replace("bearer ", "", $_SERVER['HTTP_ID']);
  header('Content-type: application/json; charset=utf-8');
?>

{
  "home" : "gmalite://gmalite-news",
  "dateFormats": {
    "dateFormat": "yyyy-MM-dd"
  },
  "menu": {
    "main": [
      {
        "title": "gmal_menu_news",
        "image": "icon_menu_home",
        "link": "gmalite://gmalite-news"
      },
      {
        "title": "gmal_menu_offers",
        "image": "icon_menu_offers",
        "link": "gmalite://gmalite-offers"
      },
      {
        "title": "SommerChancen",
        "image": "icon_menu_sommerchancen",
        "link": "gmalite://gmalite-smartweb?weburl=https://sommerchancenapp.mcd.ddbcph.dk/"
      },
      {
        "title": "gmal_menu_restaurant",
        "image": "icon_menu_restaurant",
        "link": "gmalite://gmalite-restaurant"
      },
      {
        "title": "gmal_menu_food",
        "image": "icon_menu_food",
        "appBarTitle": "gmal_menu_food",
        "link": "gmalite://gmalite-smartweb?weburl=https://nutrition-web-dot-prd-euw-gmal-mcdonalds.appspot.com/dk/da-dk/"
      }
    ],
    "sub": [
      {
        "title": "gmal_menu_account",
        "image": "icon_menu_account",
        "link": "gmalite://gmalite-account"
      },
      {
        "title": "gmal_menu_eula",
        "image": "icon_menu_question",
        "link": "gmalite://gmalite-smartweb?weburl=https://gmaliteapp.mcd.ddbcph.dk/terms-and-conditions/"
      },
      {
        "title": "Persondatapolitik",
        "image": "icon_menu_question",
        "link": "gmalite://gmalite-smartweb?weburl=https://gmaliteapp.mcd.ddbcph.dk/privacy/"
      },
      {
        "title": "Om McDonald's Danmark",
        "image": "icon_menu_question",
        "link": "gmalite://gmalite-smartweb?weburl=https://gmaliteapp.mcd.ddbcph.dk/vilkaar/"
      },
      {
        "title": "Kontakt os",
        "image": "icon_menu_question",
        "link": "gmalite://gmalite-smartweb?weburl=https://gmaliteapp.mcd.ddbcph.dk/kontakt/"
      }
    ]
  },
  "theme": {
    "main": "green"
  },
  "smartWeb": {
    "whitelistEnabled": true,
    "whitelist": [
      "sommchancenapp.mcd.ddbcph.dk",
      "sommerchancenapp.mcd.ddbcph.dk",
      "www.mcdonalds.dk",
      "apps.mcdonalds.se",
      "www.leetapps.com",
      "146.148.11.132",
      "gmaliteapp.mcd.ddbcph.dk",
      "appterms.mcd.ddbcph.dk",
      "appnetopnu.mcd.ddbcph.dk",
      "46.101.125.18",
      "app.mcdonalds.dk",
      "nutrition-web-dot-prd-use-speech-apegroup.appspot.com",
      "nutrition-web-dot-prd-euw-gmal-mcdonalds.appspot.com",
      "nutrition-web-dot-dev-euw-gmal-mcdonalds.appspot.com"
    ]
  },
  "news": {
    "maximumNewsItemsLoadingLimit": 100
  },
  "offers": {
    "enableServerTimeValidation": false,
    "serverTimeToleranceMinute": 5,
    "offerActiveTime": 10,
    "offerActiveTimeUnit": "sec",
    "offerActiveDuration": "PT10S",
    "offerActiveDurationText": "10 sekunder",
    "maximumOfferItemsLoadingLimit": 1000,
    "claimType": "showAndGo"
  },
  "forceUpdate": {
    "enabled": false,
    "appStoreAddress": "https://play.google.com/store/apps/details?id=com.mcdonalds.mobileapp",
    "iOSAppStoreAddress": "https://itunes.apple.com/us/app/mcdonalds/id1217507712",
    "minAndroidVersion": 0,
    "minIOSBuild": 0
  },
  "restaurant": {
    "hideOpenHours": false,
    "hideContact": false,
    "hideFacilities": false,
    "hideDirectionButton": false
  },
  "account": {
    "termsAndConditionsVersion": "2000-01-01",
    "fields": [
      {
        "type": "firstName",
        "showInAccount": true,
        "required": true
      },
      {
        "type": "lastName",
        "showInAccount": true,
        "required": true
      },
      {
        "type": "email",
        "showInAccount": true,
        "required": true
      },
      {
        "type": "password",
        "showInAccount": true,
        "required": true,
        "minLength": 8,
        "containsDigit": true,
        "containsUpperCase": true,
        "containsLowerCase": false
      },
      {
        "type" : "gender",
        "showInAccount" : true,
        "required" : false,
        "genders" : [
          "male",
          "female"
        ]
      },
      {
        "type": "birthMonthYear",
        "showInAccount" : true,
        "required" : false,
        "minimumDate": "1900-01-01",
        "startDate" : "2000-01-01",
        "minimumAge": 16
      },
      {
        "type": "emailConsent",
        "showInAccount": true,
        "required": false,
        "text": "McDonald’s Denmark ApS (”McDonald’s”) can send me information via <a href=\"https://gmaliteapp.mcd.ddbcph.dk/contacting/\">electronic post</a> and ordinary letters and can call me regarding McDonald’s’ products and services (<a href=\"https://gmaliteapp.mcd.ddbcph.dk/products-services/\">see more here</a>)."
      },
      {
        "type": "confirmTCPP",
        "required": true,
        "text": "Jeg accepterer McDonald’s <a href=\"https://gmaliteapp.mcd.ddbcph.dk/terms-and-conditions/\"><u>vilkår og betingelser</u></a> samt <a href=\"https://gmaliteapp.mcd.ddbcph.dk/privacy/\"><u>privatlivspolitik</u></a>, og jeg bekræfter, at jeg er fyldt 16 år."
      }
    ]
  },
  "connectors": {
    "digits":{
      "consumerKey": "IVm0RHHbrLnoCR2VBMqSAb8eE",
      "consumerSecret": "6YFCOtUQr4gke3qc8OvFFKod22Ce2aiQhph0ezkP2Id9IjiIqC"
    },
    "vMob": {
      "siteId": "West-Europe-GMA",
      "authKey": "5694cb31-242e-49e4-8be2-8674ae4800f0",
      "authKeyAndroid": "7c0919f4-d46a-4aba-93ca-4a0270097fa7",
      "merchantId": 564
    },
    "apegroup": {
      "restaurantBaseUrl": "https://locationfinder-api-dot-prd-euw-gmal-mcdonalds.appspot.com/"
    },
    "buglife": {
      "enabled": false
    },
    "google":{
      "mapsDirection": "https://maps.googleapis.com/maps/api/directions/json",
      "nearbySearch": "https://maps.googleapis.com/maps/api/place/nearbysearch/json",
      "geoCodeService": "http://maps.googleapis.com/maps/api/geocode/json",
      "browserKey": "AIzaSyCahkwgCB2ErfAVpHSNxbcUbw8iFYRrDMw",
      "geoCodeRegion": "dk",
      "geoCodeLanguage": "da",
      "directionLanguage": "da",
      "geoCodeClientId": "",
      "geoCodeSignatureKey": ""
    }
  }
}
