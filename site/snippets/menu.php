<header class="grid grid-cols-12 items-center fixed top-0 left-0 w-full p-4 text-lg z-10">
  <menu class="flex flex-row space-x-2 col-start-1 col-end-auto">
    <!-- Pages -->
    <?php foreach ($site->children()->listed() as $item): ?>
    <li class="border border-black px-1.5 py-0 hover:bg-tp-orange <?php e($item->isOpen(), ' bg-tp-orange ', ' bg-white ') ?>">
        <a <?php e($item->isOpen(), 'aria-current" ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>

    <!-- Switch Languages -->
    <?php foreach($kirby->languages() as $language): ?>
    <li class="uppercase border border-black px-1.5 py-0 bg-white hover:bg-tp-orange rounded-full <?php e($kirby->language() === $language, ' active') ?>">
      <a href="<?php e($page->translation($language->code())->exists(), $page->url($language->code()), page('error')->url($language->code())) ?>"><?php echo $language->code(); ?></a>
    </li>
    <?php endforeach ?>
  </menu>

  <!-- Logo -->
  <h1 class="py-0 w-36 col-start-6 col-end-8 justify-self-center">
    <a href="<?= $site->url() ?>"">
      <img class="max-h-full max-w-full" src="<?= url('assets/icons/logo.svg') ?>" alt="<?= $site->title() ?>">
    </a>
  </h1>

  <!-- Mailing list -->
  <a class="ml-onclick-form border-0 py-0 hover:text-tp-orange col-start-11 col-end-13 text-right whitespace-nowrap" href="javascript:void(0)" onclick="ml('show', 'qpgWFo', true)">Join our mailing list</a>
</header>
