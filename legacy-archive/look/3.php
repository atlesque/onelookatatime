<?php
$lookId = 'juliet-black-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="bracelet" alt="AR Display Bracelet" title="AR Display Bracelet" coords="402,229,406,297,448,316,486,295,450,204" shape="poly">
    <area data-look-detail-id="glasses" alt="Smart Conference Glasses" title="Smart Conference Glasses" coords="594,211,590,291,775,304,775,217" shape="poly">
    <area data-look-detail-id="necklace" alt="USB Necklace" title="USB Necklace" coords="638,477,653,540,745,538,767,473" shape="poly">
    <area data-look-detail-id="photovoltaic-fiber" alt="Photovoltaic Fiber" title="Photovoltaic Fiber" coords="514,1019,571,717,828,728,735,1080" shape="poly">
    <area data-look-detail-id="pants" alt="Size Adjustable Pants" title="Size Adjustable Pants" coords="501,1027,693,1147,602,1550,564,1890,446,1892,395,1860,480,1122" shape="poly">
    <area data-look-detail-id="pants" alt="Size Adjustable Pants" title="Size Adjustable Pants" coords="684,1152,904,1091,1005,1873,813,1939" shape="poly">
  </map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "bracelet" => "Een armband met Augmented Reality Display kan foto's, video's en andere documenten projecteren. Handig tijdens zakelijke vergaderingen in open lucht of wanneer een projector niet beschikbaar is.",
    "glasses" => "Smart Conference Glasses worden geleverd met ingebouwde software voor bedrijfscommunicatie, zodat de drager altijd een verbinding naar het kantoor heeft, zelfs als hij buiten zit. Dit stimuleert buitenactiviteit terwijl de gebruiker productief blijft.",
    "necklace" => "De kleine kralen op deze ketting bevatten USB-opslag voor eenvoudig transport van zakelijke documenten. Een alternatieve versie is voorzien van kleine powerbanks voor het opladen in noodgevallen.",
    "photovoltaic-fiber" => "Photovoltaic Fiber vangt zonne-energie op en kan worden gebruikt voor het opladen van mobiele apparaten en powerbanks. Overtollige energie kan worden gedoneerd aan het elektriciteitsnet van de stad.",
    "pants" => "Aan grootte aanpasbare broeken kunnen groeien en krimpen afhankelijk van de voorkeur van de gebruiker. Maak ze lang op het werk en trek ze op tijdens een wandeling in het park. One size fits all."
  ],
  "eng" => [
    "bracelet" => "A bracelet with Augmented Reality Display can project photos, video and other documents. Useful during outdoor business meetings, or whenever a projector is unavailable.",
    "glasses" => "Smart Conference Glasses come with build-in corporate communication software, allowing the wearer to always have an uplink to the office, even when sitting outside. This encourages outdoor activity while letting the user remain productive.",
    "necklace" => "The tiny beads on this necklace contain USB storage for easy transportation of business documents. An alternative version features tiny powerbanks for emergency charging.",
    "photovoltaic-fiber" => "Photovoltaic Fiber captures solar energy and can be used for charging mobile devices and powerbanks. Excess energy can be donated back to the city's electrical grid.",
    "pants" => "Size Adjustable Pants can grow and shrink depending on the user's own preference. Make them long at work and pull them up during a walk in the park. One size fits all."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>