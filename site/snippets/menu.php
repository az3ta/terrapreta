<header class="flex flex-row justify-between fixed top-0 left-0 w-full p-4">
  <menu class="flex flex-row space-x-2">

    <!-- Pages -->
    <?php foreach ($site->children()->listed() as $item): ?>
    <li class="border border-black px-2 py-1 bg-white hover:bg-green-400 <?php e($item->isOpen(), ' bg-green-400 ') ?>">
        <a <?php e($item->isOpen(), 'aria-current" ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>

    <!-- Switch Languages -->
    <?php foreach($kirby->languages() as $language): ?>
    <li class="uppercase border border-black px-2 py-1 bg-white hover:bg-green-400 rounded-full <?php e($kirby->language() === $language, ' active') ?>">
      <a href="<?php e($page->translation($language->code())->exists(), $page->url($language->code()), page('error')->url($language->code())) ?>"><?php echo $language->code(); ?></a>
    </li>
    <?php endforeach ?>
  </menu>

  <!-- Logo -->
  <h1 class="border border-black px-2 py-1 bg-white hover:bg-green-400">
      <a href="<?= $site->url() ?>">Terrapreta</a>
  </h1>

  <!-- Link / Pop-up -->
  <a href="#" class="border-0 px-2 py-1 bg-white hover:underline">Possible link</a>
</header>
