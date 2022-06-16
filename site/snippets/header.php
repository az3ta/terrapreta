<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO -->
  <?php snippet('meta_information'); ?>
  <?php snippet('robots'); ?>

  <!-- Alpine JS -->
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

  <!-- P5.js -->
  <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>

   <!-- Tailwind CSS -->
  <?= css('assets/css/styles.css') ?>

  <!-- MailerLite Universal -->
  <script>
      (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
      .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
      n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
      (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
      ml('account', '73121');
  </script>
  <!-- End MailerLite Universal -->

</head>

<body class="font-marfa-light">

