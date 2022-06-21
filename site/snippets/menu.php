<!-- Desktop menu -->
<header class="hidden sm:grid grid-cols-12 items-center fixed top-0 left-0 w-full p-4 text-lg z-10">
  <menu class="flex flex-row space-x-2 col-start-1 col-end-auto">
    <!-- Pages -->
    <?php foreach ($site->children()->listed() as $item): ?>
    <li class="border border-black px-1.5 py-0 hover:bg-tp-orange <?php e($item->isOpen(), ' bg-tp-orange ', ' bg-white ') ?>">
        <a <?php e($item->isOpen(), 'aria-current" ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>

    <!-- Switch Languages -->
    <?php foreach($kirby->languages() as $language): ?>
    <li class="uppercase border border-black px-1.5 py-0 bg-white hover:bg-tp-orange rounded-full <?php e($kirby->language() === $language, ' bg-tp-orange') ?>">
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>"><?php echo $language->code(); ?></a>
    </li>
    <?php endforeach ?>
  </menu>

  <!-- Logo -->
  <h1 class="py-0 w-36 col-start-6 col-end-8 justify-self-center">
    <a href="<?= $site->url() ?>"">
      <img class="max-h-full max-w-full" src="<?= e($page->isHomePage(), url('assets/icons/logo-white.svg'), url('assets/icons/logo-black.svg'))  ?>" alt="<?= $site->title() ?>">
    </a>
  </h1>

  <!-- Mailing list -->
  <a class="<?= e($page->isHomePage(), 'text-white', 'text-black') ?> hidden sm:block ml-onclick-form border-0 py-0 hover:text-tp-orange col-start-11 col-end-13 text-right whitespace-nowrap" href="javascript:void(0)" onclick="ml('show', 'qpgWFo', true)">Join our mailing list</a>
</header>

<!-- Mobile menu -->
<header class="flex flex-row w-screen sm:hidden fixed z-20 top-4 px-4 content-center" x-data="{ open: false }">
  <button class="border border-black px-1.5 py-0 hover:bg-tp-orange bg-white" @click="open = ! open">Menu</button>
  <menu x-show="open" @click.outside="open = false" class="fixed top-0 left-0 p-4 bg-pink-200 w-screen h-screen flex flex-col space-y-8">
     <button class="border w-fit border-black px-1.5 py-0 hover:bg-tp-orange bg-white" @click="open = ! open">Close</button>

     <!-- Pages -->
    <?php foreach ($site->children()->listed() as $item): ?>
    <li class="text-xl border border-black px-1.5 py-0 w-fit hover:bg-tp-orange <?php e($item->isOpen(), ' bg-tp-orange ', ' bg-white ') ?>">
        <a <?php e($item->isOpen(), 'aria-current" ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>

    <!-- Switch Languages -->
    <?php foreach($kirby->languages() as $language): ?>
    <li class="text-xl uppercase border w-fit border-black px-1.5 py-0 bg-white hover:bg-tp-orange rounded-full <?php e($kirby->language() === $language, ' bg-tp-orange') ?>">
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>"><?php echo $language->code(); ?></a>
    </li>
    <?php endforeach ?>

    <a class="text-xl ml-onclick-form border-0 py-0 hover:text-tp-orange whitespace-nowrap" href="javascript:void(0)" onclick="ml('show', 'qpgWFo', true)">Join our mailing list</a>
  </menu>

  <h1 class="w-36 self-end absolute inset-0 mx-auto" x-show="!open">
    <a href="<?= $site->url() ?>"">
      <img class="max-h-full max-w-full" src="<?= e($page->isHomePage(), url('assets/icons/logo-white.svg'), url('assets/icons/logo-black.svg'))  ?>" alt="<?= $site->title() ?>">
    </a>
  </h1>

</header>
