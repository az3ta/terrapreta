  <footer class="px-4 lg:px-0 flex flex-col mx-0 sm:mx-4 self-center max-w-6xl bg-white text-lg mt-[12rem] mb-[6rem] ">
    <section class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-5 gap-4 border border-black p-4">
      <!-- Terrrapreta APS -->
      <div>
        <h4 class="font-marfa-bold"><?= $site->legalName() ?></h4>
        <p><?= $site->organizationType() ?></p>
        <p><?= $site->country() ?></p>
        <p><?= $site->fiscalCode() ?></p>
      </div>

      <!-- Address -->
      <div>
        <h4 class="font-marfa-bold"><?php echo t('legalAddress') ?></h4>
        <address class="not-italic"><?= kt($site->address()) ?></address>
      </div>

      <!-- Contacts -->
      <div>
        <h4 class="font-marfa-bold"><?php echo t('contacts') ?></h4>
        <p class="hover:text-tp-orange"><?= Html::email($site->email()) ?></p>
      </div>

      <!-- Stay in Touch -->
      <div class="flex flex-col">
        <h4 class="font-marfa-bold"><?php echo t('connect') ?></h4>

        <?php if ($site->arena()->isNotEmpty()): ?>
          <a class="hover:text-tp-orange" target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->arena() ?>">Are.na</a>
        <?php endif ?>
        <?php if ($site->instagram()->isNotEmpty()): ?>
          <a class="hover:text-tp-orange" target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->instagram() ?>">Instagram</a>
        <?php endif ?>
        <?php if ($site->facebook()->isNotEmpty()): ?>
          <a class="hover:text-tp-orange" target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->facebook() ?>">Facebook</a>
        <?php endif ?>
        <a class="hover:text-tp-orange" class="ml-onclick-form" href="javascript:void(0)" onclick="ml('show', 'qpgWFo', true)">Mailing List</a>
      </div>

      <!-- Support Our Work -->
      <div class="flex flex-col">
        <h4 class="font-marfa-bold"><?php echo t('support') ?></h4>
        <?php if ($site->coinbase()->isNotEmpty()): ?>
          <a class="hover:text-tp-orange" target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->coinbase() ?>">Coinbase</a>
        <?php endif ?>
        <?php if ($site->openCollective()->isNotEmpty()): ?>
          <a class="hover:text-tp-orange" target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->openCollective() ?>">Open Collective</a>
        <?php endif ?>
      </div>
    </section>
    <section class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-5 gap-4 pt-1 pl-4 pr-4 text-gray-700">
      <p class="lg:col-span-4">&#169;<?= date("Y"); ?> Terrapreta APS &ndash; <br / class="block md:hidden">All rights reserved</p>
      <ul class="lg:col-start-5">
        <li><a class="cursor-pointer hover:text-tp-orange <?= e($page->is(page('impressum')), 'text-tp-orange') ?>" href="<?= page('impressum')->url() ?>"><?= page('impressum')->title() ?></a></li>
        <!-- <li<a class="cursor-pointer hover:text-tp-orange <?= e($page->is(page('privacy-policy')), 'text-tp-orange') ?>" href="<?= page('impressum')->url() ?>"><?= page('privacy-policy')->title() ?></a></li> -->
      </ul>
    </section>
  </footer>
</body>
</html>
