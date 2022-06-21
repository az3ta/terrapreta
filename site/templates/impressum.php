<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Impressum -->
<main class="m-4 grid grid-cols-12 mt-32 text-lg">
  <article class="col-start-1 col-end-13 md:col-start-2 md:col-end-12 lg:col-start-3 lg:col-end-11 xl:col-start-4 xl:col-end-10 flex flex-col space-y-4">

    <section class="p-4 bg-tp-orange bg-opacity-20">
      <p><?= $site->legalName() ?></p>
      <p><?= $site->organizationType() ?></p>
      <address class="not-italic"><?= kt($site->address()) ?></address>
    </section>

    <section class="p-4 bg-tp-orange bg-opacity-20">
      <p><?php echo t('legalRappresentative') ?>: Gianluca Rapaccini</p>
      <p><?= $site->country() ?></p>
      <p><?= $site->fiscalCode() ?></p>
      <p class="hover:text-tp-orange"><?= Html::email($site->email()) ?></p>
    </section>

    <section class="p-4 bg-tp-orange bg-opacity-20">
      <p >Design + Development: <a class="hover:text-tp-orange" href="https://maat.xyz/en">MAAT</a></p>
      <p>Typeface: ABC Marfa Light + Bold</p>
      <p>Built with: Kirby CMS</p>
    </section>

    <section class="p-4 bg-tp-orange bg-opacity-20">
       <p><?php echo t('thanksSupport') ?>:</p>
      <p>Content Folder GmbH & Co. KG, Dinamo GmbH</p>
    </section>

    <section class="p-4 bg-tp-orange bg-opacity-20">
      <p><?php echo t('lastUpdate') ?>: <?= $site->modified('Y-m-d, H:i') ?></p>
      <p><?php echo t('version') ?>: 1.0.0</p>
    </section>

  </article>
</main>

<!-- Footer -->
<?php snippet('footer') ?>
