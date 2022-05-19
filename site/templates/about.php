<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- About -->
<main class="grid grid-cols-12 mt-32 text-3xl space-y-16">

  <!-- Intro -->
  <?php if ($page->intro()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <?= $page->intro() ?>
  </section>
  <?php endif ?>

  <!-- Our Mission -->
  <?php if ($page->mission()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-2"><?php echo t('mission') ?></h2>
    <?= kt($page->mission()) ?>
  </section>
  <?php endif ?>

  <!-- What do we do -->
  <?php if ($page->what()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-2"><?php echo t('what') ?></h2>
    <?= kt($page->what()) ?>
  </section>
  <?php endif ?>

  <!-- Team -->
  <?php if ($page->team()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-2"><?php echo t('team') ?></h2>
    <?= kt($page->team()) ?>
    <!-- Team List -->
    <dl class="text-lg font-marfa-bold grid grid-cols-2 mt-6">
      <?php foreach ($users = $kirby->users()->sortBy('lastName', 'asc') as $user): ?>
      <hr class="col-span-2 border-black pt-1" />
      <dt><?= $user->name() ?> </dt>
      <dd class="font-marfa-light mb-2"><?= $user->jobDescription() ?></dd>
      <?php endforeach ?>
    </dl>
  </section>
  <?php endif ?>

  <!-- Support -->
  <?php if ($page->support()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-2"><?php echo t('support') ?></h2>
    <?= kt($page->support()) ?>
  </section>
  <?php endif ?>

  <?php if ($page->howMoney()->isNotEmpty()): ?>
  <section class="col-start-4 col-end-10">
    <h2 class="text-lg font-marfa-bold pb-2"><?php echo t('money') ?></h2>
    <?= kt($page->howMoney()) ?>
  </section>
  <?php endif ?>
</main>

<!-- Footer -->
<?php snippet('footer') ?>
