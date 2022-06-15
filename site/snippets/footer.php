  <footer class="grid grid-cols-5 gap-8 border border-black p-4 margin-auto max-w-content mx-auto bg-white text-lg mt-[12rem] mb-[6rem] ">

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

        <?php if ($site->newsletter()->isNotEmpty()): ?>
          <a target="_blank" rel="noopener noreferrer nofollow" href="<?= $site->newsletter() ?>">Newsletter</a>
        <?php endif ?>
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


      <section class="p-4">
        <p>Questo sito non raccoglie info</p>
      </section>

  </footer>
</body>
</html>
