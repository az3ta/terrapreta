<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="absolute bg-no-repeat bg-center bg-cover w-full h-full z-0" style="background-image: url(<?= $imageHome->thumb(['format' => 'webp', 'quality' => 80])->url() ?>);">

  <!-- Headline -->
  <section class="px-4 w-full h-screen fixed z-20 top-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-30 text-2xl sm:text-3xl md:text-5xl">
    <p class="font-marfa-bold max-w-[65rem] text-center"><?= $site->headline() ?></p>
  </section>

  <!-- P5 sketch -->
  <section class="w-screen h-screen fixed top-0 z-10" id="p5"></section>

</main>

<?php snippet('footerHome') ?>

<script>
let x,y;
let t = 12;
let T = 10;

function setup() {
  const myCanvas = createCanvas(windowWidth, windowHeight);
  myCanvas.parent("p5");
  background(255, 0);
  frameRate(20)
}

function draw() {
  fill('rgba(253, 95, 12, 0.25)');
  noStroke();
  rectMode(CENTER)
  rect(x, y, random(1, 25), random(1, 25))

  x = noise(t);
  x = map(x, 0, 1, 0, width);
  y = noise(T);
  y = map(y, 0, 1, 0, height);

  t = t + 0.01;
  T = T + 0.01;
}
</script>
