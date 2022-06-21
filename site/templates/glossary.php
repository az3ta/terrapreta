<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- Glossary -->
<main class="m-4 mt-32 grid grid-cols-12 text-xl gap-4">

  <?php
  $items = $page->glossary()->toStructure();
  foreach ($items as $item): ?>
  <div class="col-span-4 ">
    <h2 class="font-marfa-bold"><?= $item->term()->html() ?></h2>
    <?= kt($item->definition()) ?>
    <?php if ($item->citation()->isNotEmpty()): ?>
    <span class="text-base">
    <?= kt($item->citation()) ?>
    </span>
    <?php endif ?>
    <?php foreach ($item->image()->toFiles() as $image): ?>
    <picture class=" flex flex-col">
      <img
        class="self-center"
        loading="lazy"
        src="<?= $image->thumb(['format' => 'webp', 'quality' => 80, 'width' => 250])->url() ?>">
    </picture>
    <?php endforeach ?>

    <!-- See also -->
    <?php if ($item->seeAlso()->isNotEmpty()): ?>
      <div class="flex flex-row mt-2 space-x-2 border-t border-black">
        <p class="text-lg "><?php echo t('seeAlso') ?></p>
        <ul class="flex flex-row text-lg space-x-2">
          <?php foreach ($item->seeAlso() as $similar): ?>
          <li>
            <?= $similar ?>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif ?>
  </div>
  <?php endforeach ?>

</main>

<!-- Footer -->
<?php snippet('footer') ?>
