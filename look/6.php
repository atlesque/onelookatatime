<?php
$lookId = 'remy-black-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="gloves" alt="Hair Styling Gloves" title="Hair Styling Gloves" coords="516,1062,434,863,495,722,548,680,598,769,645,792,695,878,725,1020" shape="poly">
    <area data-look-detail-id="photovoltaic-mesh" alt="Photovoltaic Mesh" title="Photovoltaic Mesh" coords="879,1104,961,813,1029,752,1164,826,1194,942,1137,1128" shape="poly">
    <area data-look-detail-id="bracelet" alt="Wireless Battery" title="Wireless Battery" coords="516,1685,482,1647,468,1564,491,1484,529,1476,522,1581,560,1678" shape="poly">
  </map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "gloves" => "Hair Styling Gloves gebruiken een mix van groene elektrostatische energie en natuurlijke haargel om de gebruiker snel een nieuw kapsel te geven.",
    "photovoltaic-mesh" => "Het fotovoltaïsche maas oogst zonne-energie en gebruikt het om mobiele apparaten en powerbanks op te laden. Vanwege zijn lichte aard laat hij ook voldoende lucht binnen om het lichaam te koelen.",
    "bracelet" => "Deze armband heeft een ingebouwde batterij voor het opladen van mobiele apparaten. Dankzij de draadloze oplaadtechnologie kunnen apparaten tot 5 meter van de armband worden opgeladen."
  ],
  "eng" => [
    "gloves" => "Hair Styling Gloves use a mix of green electrostatic energy and natural hair gel to give the user a quick new hairstyle.",
    "photovoltaic-mesh" => "The Photovoltaic Mesh harvests solar energy and uses it to charge mobile devices and powerbanks. Because of its light nature, it also lets in enough air to cool the body.",
    "bracelet" => "This bracelet has a build-in battery for charging mobile devices. Thanks to its wireless charging technology, devices can be up to 5m away from the bracelet to charge."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>