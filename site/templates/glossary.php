<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Glossary -->
<main class="mt-32 grid grid-cols-12 text-xl gap-4">

  <?php
  $items = $page->glossary()->toStructure();
  foreach ($items as $item): ?>
  <div class="col-span-4">
    <h2 class="font-marfa-bold"><?= $item->term()->html() ?></h2>
    <?= kt($item->definition()) ?>
    <?php foreach ($item->image()->toFiles() as $image): ?>
      <picture>
        <img
          loading="lazy"
          src="<?= $image->crop(500)->url() ?>">
      </picture>
    <?php endforeach ?>

    <!-- See also -->
    <?php if ($item->seeAlso()->isNotEmpty()): ?>
      <strong><?php echo t('seeAlso') ?></strong>
      <ul>
        <?php foreach ($item->seeAlso()->text()->split() as $similar): ?>
        <li><?= $similar ?></li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
  </div>
  <?php endforeach ?>

</main>

<!-- Footer -->
<?php snippet('footer') ?>
