  <footer class="flex flex-col margin-auto max-w-6xl mx-auto bg-white text-lg mt-[12rem] mb-[6rem] ">
    <section class="grid grid-cols-5 gap-4 border border-black p-4">
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
        <p><?= Html::email($site->email()) ?></p>
      </div>

      <!-- Stay in Touch -->
      <div class="flex flex-col">
        <h4 class="font-marfa-bold"><?php echo t('connect') ?></h4>

        <?php if ($site->arena()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->arena() ?>">Are.na</a>
        <?php endif ?>
        <?php if ($site->instagram()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->instagram() ?>">Instagram</a>
        <?php endif ?>
        <?php if ($site->facebook()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->facebook() ?>">Facebook</a>
        <?php endif ?>
        <a class="ml-onclick-form" href="javascript:void(0)" onclick="ml('show', 'qpgWFo', true)">Mailing List</a>
      </div>

      <!-- Support Our Work -->
      <div class="flex flex-col">
        <h4 class="font-marfa-bold"><?php echo t('support') ?></h4>
        <?php if ($site->coinbase()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->coinbase() ?>">Coinbase</a>
        <?php endif ?>
        <?php if ($site->openCollective()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->openCollective() ?>">Open Collective</a>
        <?php endif ?>
      </div>
    </section>
    <section class="grid grid-cols-5 gap-4 pt-1 pl-4 pr-4 text-gray-700">
      <p class="col-span-4">&#169;<?= date("Y"); ?> Terrapreta APS – All rights reserved</p>
      <ul class="col-start-5">
        <li><a href="<?= page('impressum')->url() ?>"><?= page('impressum')->title() ?></a></li>
        <li>Privacy policy</li>
      </ul>
    </section>
  </footer>
</body>
</html>
