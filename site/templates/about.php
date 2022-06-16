<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- About -->
<main class="m-4 grid grid-cols-12 mt-32 text-3xl space-y-12">

  <!-- Intro -->
  <?php if ($page->intro()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <?= $page->intro() ?>
  </section>
  <?php endif ?>

  <!-- Our Mission -->
  <?php if ($page->mission()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-0.5"><?php echo t('mission') ?></h2>
    <?= kt($page->mission()) ?>
  </section>
  <?php endif ?>

  <!-- What do we do -->
  <?php if ($page->what()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-0.5"><?php echo t('what') ?></h2>
    <?= kt($page->what()) ?>
  </section>
  <?php endif ?>

  <!-- Team -->
  <?php if ($page->team()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-0.5"><?php echo t('team') ?></h2>
    <?= kt($page->team()) ?>
    <!-- Team List -->
    <ul class="text-lg mt-2 flex flex-row flex-wrap">
      <?php foreach ($users = $kirby->users()->sortBy('lastName', 'asc') as $user): ?>
      <li class="whitespace-nowrap"><?= $user->name() ?>,</li>
      <?php endforeach ?>
    </ul>
  </section>
  <?php endif ?>

  <!-- Support -->
  <?php if ($page->support()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-0.5"><?php echo t('support') ?></h2>
    <?= kt($page->support()) ?>
    <ul class="flex flex-row space-x-2 text-lg mt-4">
      <li class="border border-black px-1.5 py-0 hover:bg-tp-green">
        <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->coinbase() ?>">Coinbase</a>
      </li>
      <li class="border border-black px-1.5 py-0 hover:bg-tp-green" href="<?= $site->openCollective() ?>" >
        <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->openCollective() ?>">Open Collective</a>
      </li>
    </ul>
  </section>
  <?php endif ?>

  <?php if ($page->howMoney()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-0.5"><?php echo t('money') ?></h2>
    <?= kt($page->howMoney()) ?>

  </section>
  <?php endif ?>
</main>

<!-- Footer -->
<?php snippet('footer') ?>
