<div class="look-info__close-wrapper">
  <svg class="look-info__close-flap" width="192" height="61" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
  <div class="look-info__close-icon-wrapper">
    <span class="chevron-light"></span>
  </div>
</div>
<section id="look-info" class="look-info clearfix container-fluid">
  <div class="look-info__language-toggle">
    <span class="look-info__other-language" data-set-language=""></span>
  </div>
  <div class="look-info__wrapper row">
    <div class="look-info__detail-image-wrapper col-lg-6 text-center">
      <div class="chevron-wrapper chevron-wrapper--left"><span class="chevron-light chevron-light--left"></span></div>
      <img id="look-info__detail-image" class="look-info__detail-image img-responsive img-fluid rounded" src="" alt="Look detail shot">
      <div class="chevron-wrapper chevron-wrapper--right"><span class="chevron-light chevron-light--right"></span></div>
    </div>
    <div id="look-info__description-list" class="look-info__description-list col-lg-6">
      <?php foreach($lookDescriptions as $language=>$descriptions): ?>
        <?php foreach($lookDescriptions[$language] as $key=>$value): ?>
          <p class="look-info__description" data-look-detail-id="<?= $key ?>" data-language="<?= $language ?>"><?= $value ?></p>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>