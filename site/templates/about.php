<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="grid grid-cols-12 mt-32 text-xl space-y-8">

  <!-- Intro -->
  <?php if ($page->intro()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <?= $page->intro() ?>
  </section>
  <?php endif ?>

  <!-- Our Mission -->
  <?php if ($page->mission()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-base font-semibold"><?php echo t('mission') ?></h2>
    <?= kt($page->mission()) ?>
  </section>
  <?php endif ?>

  <!-- What do we do -->
  <?php if ($page->what()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-base font-semibold"><?php echo t('what') ?></h2>
    <?= kt($page->what()) ?>
  </section>
  <?php endif ?>

  <!-- Team -->
  <?php if ($page->team()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-base font-semibold"><?php echo t('team') ?></h2>
    <?= kt($page->team()) ?>

    <!-- Team List -->
    <dl class="text-lg font-semibold grid grid-cols-2 mt-4">
      <?php foreach ($users = $kirby->users()->sortBy('lastName', 'asc') as $user): ?>
      <hr class="col-span-2 border-black" />
      <dt><?= $user->name() ?> </dt>
      <dd class="font-light mb-2"><?= $user->jobDescription() ?></dd>
      <?php endforeach ?>
    </dl>
  </section>
  <?php endif ?>

  <!-- Support -->
  <?php if ($page->support()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-base font-semibold"><?php echo t('support') ?></h2>
    <?= kt($page->support()) ?>
  </section>
  <?php endif ?>

  <?php if ($page->howMoney()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-base font-semibold"><?php echo t('money') ?></h2>
    <?= kt($page->howMoney()) ?>
  </section>
  <?php endif ?>
</main>

<?php snippet('footer') ?>
