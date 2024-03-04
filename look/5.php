<?php
$lookId = 'juliet-white-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="fiber" alt="Heat Absorbing Fiber" title="Heat Absorbing Fiber" coords="814,369,696,517,672,834,685,986,875,971,885,616,866,443" shape="poly">
    <area data-look-detail-id="watch" alt="AI Smart Watch" title="AI Smart Watch" coords="953,992,1016,958,1033,996,962,1026" shape="poly">
    <area data-look-detail-id="bag" alt="Bag" title="Bag" coords="362,1111,387,1385,658,1332,645,1091" shape="poly">
    <area data-look-detail-id="shoes" alt="Kinetic Energy Saving Shoes" title="Kinetic Energy Saving Shoes" coords="645,1432,791,1467,795,1647,731,1856,757,2021,651,2118,546,2116,546,2035,636,1864,653,1647" shape="poly">
  </map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "fiber" => "Warmte absorberende vezel kleding wordt gedragen tijdens fysiek intense activiteiten zoals hardlopen. Het absorbeert de lichaamswarmte en zet het om in bruikbare energie terwijl de drager koel blijft.",
    "watch" => "Een Smart Watch met persoonlijke AI kan worden gebruikt om uw dagelijkse activiteiten te volgen en persoonlijke trainingsschema's op te stellen. Het houdt je ook gemotiveerd om te oefenen, rekening houdende met je drukke agenda",
    "bag" => "Deze tas is gemaakt van gerecycled plastic uit de oceaan. Het is een perfecte manier om afval te hergebruiken.",
    "shoes" => "Kinetic Energy Saving Shoes vangen de energie van de drager op tijdens het wandelen en slaan deze op in de ingebouwde batterijen. De schoenen hebben LED-verlichting die 's nachts de zichtbaarheid verbetert. Overmatige energie kan worden gebruikt om mobiele apparaten op te laden of kan worden gedoneerd aan het elektriciteitsnet van de stad."
  ],
  "eng" => [
    "fiber" => "Heat Absorbing Fiber clothing is worn during physically intense activities such as running. It absorbs the body heat and converts it to usable energy while keeping the wearer cool.",
    "watch" => "A Smart Watch with personal AI can be used to monitor your daily activity and build personal training schedules. It also keeps you motivated to exercise, while keeping in mind your busy agenda.",
    "bag" => "This bag is made of recycled plastics from the ocean. It's a perfect way to reuse garbage fashionably.",
    "shoes" => "Kinetic Energy Saving Shoes capture the wearer's energy during walks and stores it in the build-in batteries. The shoes have LED lights which help increase visibility during the night. Excess energy can be used to charge mobile devices or can be donated to the city's electrical grid."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>