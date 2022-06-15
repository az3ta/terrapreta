<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="absolute z-0">

  <!-- Headline -->
  <section class="p-x-4 w-full h-screen fixed z-20 top-0 flex flex-col items-center justify-center">
    <p class="leading-tight font-marfa-bold max-w-[65rem] text-5xl text-center"><?= $site->headline() ?></p>
  </section>

  <!-- Background image -->
  <section class="fixed z-0 top-0 w-full h-full">
    <img class=" w-full h-auto min-h-full fixed top-0  opacity-60" src="<?= $imageHome->url() ?>" alt="">
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
  fill(35, 230, 40, 125);
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
