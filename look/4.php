<?php
$lookId = 'julia-black-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="glasses" alt="High-End Smart Glasses" title="High-End Smart Glasses" coords="436,192,442,262,619,274,632,203" shape="poly">
    <area data-look-detail-id="waistband" alt="Eco Battery Band" title="Eco Battery Band" coords="419,940,411,794,731,699,805,830,689,897,474,954" shape="poly">
    <area data-look-detail-id="skirt" alt="Lightweight Photovoltaic Fiber" title="Lightweight Photovoltaic Fiber" coords="442,1170,451,1617,521,1686,706,1657,960,1615,1025,1564,966,1306,900,1051,738,1134,552,1180" shape="poly">
    <area data-look-detail-id="shoes" alt="Kinetic Energy Shoes" title="Kinetic Energy Shoes" coords="639,1887,721,1868,740,1978,736,2120,681,2147,619,2115,641,1987" shape="poly">
    <area data-look-detail-id="shoes" alt="Kinetic Energy Shoes title="Kinetic Energy Shoes" coords="981,1892,1059,1862,1092,1953,1198,2073,1073,2109,1014,2078" shape="poly">
  </map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "glasses" => "High-End Smart Glasses zouden een mobiele telefoon kunnen vervangen door dezelfde functionaliteit te bieden, maar dan handsfree. Een camera aan de voorkant kan het zicht van de gebruiker in realtime delen, handig voor bloggers en journalisten. Ze hebben ook een duurzame constructie en kunnen worden aangepast met modulaire onderdelen, afhankelijk van de behoeften van de gebruiker.",
    "waistband" => "Deze Eco Battery Band is gemaakt van 100% gerecyclede materialen. Intern bevat het een flexibele batterij die kan worden gebruikt om de Smart Glasses of een ander mobiel apparaat op te laden.",
    "skirt" => "Een rok van lichtgewicht fotovoltaïsche vezels kan zonne-energie vangen. Het is licht genoeg voor elke fysieke activiteit, terwijl de interne magneten ervoor zorgen dat het tijdens winderige dagen of tijdens het fietsen niet in de lucht waait.",
    "shoes" => "Deze schoenen vangen kinetische energie op tijdens het lopen. De energie kan draadloos in de batterijband worden opgeslagen of worden gebruikt om mobiele apparaten op te laden."
  ],
  "eng" => [
    "glasses" => "High-End Smart Glasses could replace a mobile phone by allowing the same functionality, only hands-free. A front camera can transmit the user's view in real-time, useful for bloggers and journalists. They also feature a durable construction and can be upgraded using modular parts, depending on the user's needs.",
    "waistband" => "This Eco Battery Band is made from 100% recycled materials. Internally it contains a flexible battery that can be used to charge the Smart Glasses or any other mobile device.",
    "skirt" => "A skirt made from Lightweight Photovoltaic Fiber can capture solar energy. It is light enough for any physical activity, while its internal magnets help keep it from flying in the air during windy days or when riding a bike.",
    "shoes" => "These shoes capture kinetic energy while walking. The energy can either wirelessly be stored in the battery band or used to charge mobile devices."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>