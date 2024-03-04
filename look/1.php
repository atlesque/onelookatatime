<?php
$lookId = 'remy-white-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="glasses" alt="Smart Glasses" title="Smart Glasses" coords="535,370,826,293,856,426,571,486" shape="poly">
    <area data-look-detail-id="photovoltaic-membrane" alt="Super Charge Photovoltaic Membrane" title="Super Charge Photovoltaic Membrane" coords="487,720,820,796,799,920,423,851" shape="poly">
    <area data-look-detail-id="adaptive-clothing" alt="Weather Adaptive Clothing" title="Weather Adaptive Clothing" coords="807,1854,955,1410,843,982,1135,853,1234,1404,1096,1788,898,1982" shape="poly">
    <area data-look-detail-id="pockets" alt="Powerbank Pockets" title="Powerbank Pockets" coords="875,1391,928,1463,886,1613,805,1678,582,1666,629,1412" shape="poly">
  </map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "glasses" => "Smart Glasses beschermen niet alleen tegen de zon, maar bieden ook ingebouwde GPS-navigatie, live weersvoorspellingen, videoconferencing on-the-go en ondersteund leren via Augmented Reality.",
    "photovoltaic-membrane" => "Het Super Charge fotovoltaïsche membraan vangt het beschikbare zonlicht op en zet dit om in bruikbare energie. Net als hun grotere broer, het zonnepaneel, helpen deze je smartphone en powerbank te laden.",
    "adaptive-clothing" => "Weer Adaptieve kleding verandert van kleur afhankelijk van de weersomstandigheden. Wanneer het zonnig is, wordt de stof lichter, reflecteert het grootste deel van de zon en houdt het lichaam koel.",
    "pockets" => "Met grote zakken kan de drager een extra powerbank meenemen of meer mobiele apparaten opladen met het fotovoltaïsche membraan."
  ],
  "eng" => [
    "glasses" => "Smart Glasses not only protect against the sun, but also provide build-in GPS navigation, live weather reports, on-the-go video conferencing and assisted learning through Augmented Reality.",
    "photovoltaic-membrane" => "The Super Charge Photovoltaic Membrane captures the available sunlight and converts it to usable energy. Like their bigger brother, the solar panel, these devices help charge your smartphone and powerbank.",
    "adaptive-clothing" => "Weather Adaptive Clothing changes colour depending on the weather conditions. When sunny, the fabric turns lighter, reflecting most of the sun and keeping the body cool.",
    "pockets" => "Large pockets allow the wearer to take an extra powerbank or charge more mobile devices with the Photovoltaic Membrane."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>