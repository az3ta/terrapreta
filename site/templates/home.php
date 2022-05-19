<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="absolute z-0">

  <!-- Slider main container -->

  <!-- <section class="swiper w-full h-auto">
    <div class="swiper-wrapper">
      <?php foreach($slider as $slide): ?>
      <picture class="swiper-slide h-[50rem] w-auto">
        <img
          class="h-full w-full object-fit"
          loading="lazy"
          src="<?= $slide->thumb(['format' => 'webp', 'quality' => 90])->url() ?>"
          />
      </picture>
      <?php endforeach ?>
    </div>
  </section> -->


  <section class="p-x-4 w-full h-screen absolute top-0 flex flex-col items-center justify-center">
    <p class="font-marfa-bold max-w-[65rem] text-5xl text-center"><?= $site->headline() ?></p>
  </section>

</main>


</body>
</html>

<script>
let x,y;
let t = 12;
let T = 10;

function setup() {
  createCanvas(windowWidth, windowHeight);
  background(255, 0);
}

function draw() {
  fill(35, 230, 40, 150);
  noStroke();
  rectMode(CENTER)
  rect(x, y, random(1, 20), random(1, 20))

  x = noise(t);
  x = map(x, 0, 1, 0, width);
  y = noise(T);
  y = map(y, 0, 1, 0, height);

  t = t + 0.01;
  T = T + 0.01;
}
</script>


<!-- <script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 16,
    autoplay: {
      delay: 1000,

    },
  });
</script> -->
