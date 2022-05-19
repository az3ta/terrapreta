  <footer class="flex flex-row space-x-8 border border-black p-4 margin-auto max-w-fit mx-auto mt-[12rem] mb-[6rem] bg-white text-lg">
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
          <a href="<?= $site->arena() ?>">Are.na</a>
        <?php endif ?>
         <?php if ($site->instagram()->isNotEmpty()): ?>
          <a href="<?= $site->instagram() ?>">Instagram</a>
        <?php endif ?>
        <?php if ($site->facebook()->isNotEmpty()): ?>
          <a href="<?= $site->facebook() ?>">Facebook</a>
        <?php endif ?>

        <?php if ($site->newsletter()->isNotEmpty()): ?>
          <a href="<?= $site->newsletter() ?>">Newsletter</a>
        <?php endif ?>
      </div>

      <!-- Support Our Work -->
      <div class="flex flex-col">
        <h4 class="font-marfa-bold"><?php echo t('support') ?></h4>
        <a href="<?= $site->coinbase() ?>">Coinbase</a>
        <a href="<?= $site->openCollective() ?>">Open Collective</a>
        <a href="<?= $site->paypal() ?>">PayPal</a>
      </div>
  </footer>
</body>
</html>
