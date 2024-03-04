<?php
include_once('header.php');
?>

<section class="hero">
  <img class="hero__bg img-fluid" src="/img/covers/front.jpg" alt="Cover">
</section>

<section class="intro container-fluid">
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-nl-tab" data-toggle="pill" href="#pills-nl" role="tab" aria-controls="pills-nl" aria-selected="true" data-set-language="nl">NL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-eng-tab" data-toggle="pill" href="#pills-eng" role="tab" aria-controls="pills-eng" aria-selected="false" data-set-language="eng">ENG</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-nl" role="tabpanel" aria-labelledby="pills-nl-tab">
      <p>
        <a class="" href="https://eliasgubbels.com/">Elias Gubbels</a> en <a class="" href="https://atlesque.com/">Alexander Atlesque</a> zijn strijders voor de groene zaak. Met hun camera in de aanslag inspireren ze consumenten met hun guerilla fashion campagne.
      </p>
      <p>
        Door moderne ontwikkelingen in de textielindustrie stellen ze zich kleding voor als een integraal deel van het post-fossiele stadszicht. Een flitsende jas met fotovoltaïsche stoffen kan hierdoor zonne-energie opslaan. Of schoenen kunnen kinetische energie van wandelaars opnemen en gebruiken om elektrische toestellen op te laden.
      </p>
      <p>
        'Green hacking of fashion' als het ware. Mode wordt zo niet enkel een vorm van zelfexpressie, maar ook een manier van duurzamer leven.
      </p>
      <p>
        Laat je verleiden door de trends van de toekomst.
      </p>
      <p class="intro__tagline">
        <b>ONE LOOK AT A TIME</b>
      </p>
      <p class="intro__click-to-discover">
        <i>Klik om meer te ontdekken:</i>
      </p>
    </div>
    <div class="tab-pane fade" id="pills-eng" role="tabpanel" aria-labelledby="pills-eng-tab">
      <p>
        <a class="" href="https://eliasgubbels.com/">Elias Gubbels</a> and <a class="" href="https://atlesque.com/">Alexander Atlesque</a> are fighters for the green cause. With their camera at the ready, they inspire consumers with their guerrilla fashion campaign.
      </p>
      <p>
        Due to modern developments in the textile industry, they represent clothing as an integral part of the post-fossil city view. A flashy jacket with photovoltaic substances can therefore store solar energy. Or shoes can absorb kinetic energy from walkers and use them to charge electric devices.
      </p>
      <p>
        'Green hacking of fashion' as it were. Fashion thus becomes not only a form of self-expression, but also a way of living more sustainably.
      </p>
      <p>
        Be seduced by the trends of the future.
      </p>
      <p class="intro__tagline">
        <b>ONE LOOK AT A TIME</b>
      </p>
      <p class="intro__click-to-discover">
        <i>Click to discover more:</i>
      </p>
    </div>
  </div>
</section>

<section class="looks-gallery">
  <?php for ($i=1; $i <= 6; $i++): ?>
    <a href="/look/<?= $i ?>"><img class="img-fluid" src="/img/covers/<?= $i ?>.jpg" alt="Look <?= $i ?>"></a>
  <?php endfor; ?>
</section>

<?php
include_once('footer.php');
?>