  <footer class="flex flex-row space-x-8 border border-black p-4 margin-auto max-w-fit mx-auto mt-[12rem] mb-[6rem]">
      <!-- Terrrapreta APS -->
      <div>
        <h4 class="font-marfa-semibold"><?= $site->legalName() ?></h4>
        <p><?= $site->organizationType() ?></p>
        <p><?= $site->country() ?></p>
        <p><?= $site->fiscalCode() ?></p>
      </div>

      <!-- Address -->
      <div>
        <h4 class="font-marfa-semibold"><?php echo t('legalAddress') ?></h4>
        <address class="not-italic"><?= kt($site->address()) ?>
        </address>
      </div>

      <!-- Contacts -->
      <div>
        <h4 class="font-marfa-semibold"><?php echo t('contacts') ?></h4>
        <p><?= Html::email($site->email()) ?></p>
      </div>

      <!-- Stay in Touch -->
      <div class="flex flex-col">
        <h4 class="font-marfa-semibold"><?php echo t('connect') ?></h4>
        <a href="#">Are.na</a>
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
        <a href="#">Newsletter</a>
      </div>

      <!-- Support Our Work -->
      <div class="flex flex-col">
        <h4 class="font-marfa-semibold"><?php echo t('support') ?></h4>
        <a href="#">Coinbase</a>
        <a href="#">Open Collective</a>
        <a href="#">PayPal</a>
      </div>
  </footer>
</body>
</html>
