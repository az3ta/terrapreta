<header class="flex flex-row justify-between">
  <menu class="flex flex-row space-x-2">
     <?php foreach ($site->children()->listed() as $item): ?>
    <li class="border border-black px-2 py-1 bg-white hover:bg-green-400">
        <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <li class="border border-black px-2 py-1 bg-white hover:bg-green-400 rounded-full">ITA</li>
  </menu>

  <h1 class="border border-black px-2 py-1 bg-white hover:bg-green-400">
      <a href="<?= $site->url() ?>">Terrapreta</a>
  </h1>

  <a href="#" class="border-0 px-2 py-1 bg-white hover:underline">Possible link</a>
</header>
