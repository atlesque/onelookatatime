<?php
$lookId = 'julia-white-full';
$lookNr = (int)basename(__FILE__, '.php');
include_once $_SERVER['DOCUMENT_ROOT'].'/look-header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<section class="look">
  <img class="look__full-image" src="/img/looks/<?= $lookId ?>.jpg" usemap="#look__map">

  <map name="look__map" class="look__map" id="look__map" data-look-id="<?= $lookId ?>">
    <area data-look-detail-id="glasses" alt="Surveillance Glasses" title="Surveillance Glasses" coords="588,188,626,148,752,173,765,217,733,245,607,222" shape="poly">
    <area data-look-detail-id="bracelet" alt="Tracker" title="Tracker" coords="204,1001,324,1020,307,1085,191,1052" shape="poly">
    <area data-look-detail-id="fiber" alt="Android Charging Fiber" title="Android Charging Fiber" coords="482,815,625,847,534,1202,408,1111" shape="poly">
    <area data-look-detail-id="stockings" alt="Reflective Stockings L" title="Reflective Stockings L" coords="480,1417,613,1450,579,1657,442,1700" shape="poly">
    <area data-look-detail-id="stockings" alt="Reflective Stockings R" title="Reflective Stockings R" coords="720,1404,876,1433,938,1812,833,1854" shape="poly">
    <area data-look-detail-id="shoes" alt="Extra Battery Storage" title="Extra Battery Storage" coords="835,1951,907,2010,907,2090,866,2115,814,2090" shape="poly">
  </map>
</map>
</section>

<?php

$lookDescriptions = [
  "nl" => [
    "glasses" => "De Smart Surveillance-bril laat mensen en androïden hun huis, kinderen en omgeving bewaken. Ze verbeteren de veiligheid door de gebruiker op het juiste moment te waarschuwen. bijv. Wanneer de kinderen te ver zijn afgedwaald, of een onbekende persoon het huis is binnengegaan. Ze zijn ontworpen om onopvallend te zijn, doch altijd klaar om te helpen.",
    "bracelet" => "Een Tracker-armband deelt de locatie van de drager met gekozen familie en vrienden. Het kan een SOS-signaal uitzenden, geactiveerd door de drager of tijdens een verkeersongeval of een val. De armband laadt zichzelf op met behulp van de kinetische energie die wordt gemaakt door handbewegingen.",
    "fiber" => "Android Charging Fibre is een speciaal materiaal dat wordt gebruikt voor het draadloos opladen van androids wanneer u onderweg bent. Dankzij de fotovoltaïsche eigenschappen kan het zonlicht opnemen en omzetten in bruikbare energie. Het houdt de drager ook koel tijdens de zomer. Overtollige energie wordt opgeslagen en kan worden gedoneerd aan het elektriciteitsnet van de stad.",
    "stockings" => "Reflecterende kousen zorgen voor meer zichtbaarheid op de weg. Ze zijn perfect voor fietsers en gebruikers van ander draagbaar transport zoals zelfbalancerende hoverboards.",
    "shoes" => "Deze schoenen beschikken over extra batterijopslag om overtollige zonne-energie te behouden. Ze kunnen ook worden gebruikt om androïden en mobiele apparaten op te laden."
  ],
  "eng" => [
    "glasses" => "Smart Surveillance Glasses let humans and androids monitor their home, kids and surroundings. They improve safety by alerting the user at the right time. e.g. When the kids have strayed too far, or an unknown person has entered the house. They are designed to be unobtrusive, yet always ready to help.",
    "bracelet" => "A Tracker bracelet shares the location of the wearer with chosen family and friends. It can send out an SOS signal, either triggered by the wearer or activated during a traffic accident or a fall. The bracelet charges itself using the kinetic energy made by hand movements.",
    "fiber" => "Android Charging Fiber is a special material used for wirelessly charging androids on-the-go. Its photovoltaic properties allow it to soak up sunlight and convert it to usable energy. It also keeps the wearer cool during summer. Excess energy is stored and can be donated to the city's electrical grid.",
    "stockings" => "Reflective Stockings add visibility on the road. They are perfect for cyclists and users of other portable transport like self-balancing hoverboards.",
    "shoes" => "These shoes feature extra battery storage for keeping excess solar energy. They can also be used to charge androids and mobile devices."
  ]
];

include_once $_SERVER['DOCUMENT_ROOT'].'/look-info.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>