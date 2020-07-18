<?php

function getCategory($categoryName){

      $dictionary = array(
        'Avalanche' => 'Lavina',
        'Epidemic' => 'Epidemie',
        'Dust' => 'Prach',
        'Epidemic' => 'Epidemie',
        'Extreme Temperature' => 'Extrémní teploty',
        'Fires' => 'Požáry',
        'Flooding' => 'Záplavy',
        'Ice Storm & Icing' => 'Ledovka',
        'Nitrogen Dioxide' => 'Oxid dusičitý',
        'Other' => 'Ostatní',
        'Ozone' => 'Ozon',
        'Rainfall' => 'Silný déšť',
        'Snow Storms' => 'Sněhová bouře',
        'Sulfur Dioxide' => 'Oxid siřičitý',
        'Thunderstorm' => 'Bouřky',
        'Uncategorised' => 'Bez kategorie',
        'Wind' => 'Silný vítr',
        'Windstorm' => 'Větrné bouře'
      );

      if(array_key_exists($categoryName, $dictionary)){
          return $dictionary[$categoryName];
      } else {
          return $categoryName;
      }

}

?>
