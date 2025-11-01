<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Mirik</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Lightbox2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Header -->
  <?php include("includes/header.php"); ?> 

  <!-- Hero Section -->
  <section class="about-hero text-center" style="background-image: url('assets/image/lakee.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
      <h1 class="hero-title">Welcome to Mirik</h1>
      <p class="hero-subtitle">The heart of the hills, my beloved hometown</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-writing">
    <div class="container">
      <h2 class="section-title">My Journey with Mirik</h2>
      <p class="section-text">
        I was born and raised in the serene hills of Mirik, Darjeeling – a place where every sunrise paints the sky with golden hues, and the air carries the warmth of nature’s love. Growing up here has been more than just living in a town; it has been a journey of nurturing, learning, and feeling deeply connected to the mountains, lakes, forests, and the people who make this land so special.

From my childhood days, I spent countless moments walking along Mirik Lake (Sumendu Lake), surrounded by pine trees and the calm reflection of the sky on water. The gentle wooden bridge, the sight of boating families, and the whispers of prayer flags in the wind became part of my earliest memories. I still remember my visits to Bokar Monastery, where peace filled my heart, and to Rai Dhap and Tingling View Point, where the majestic Kanchenjunga smiled upon us.

As I grew up, every corner of Mirik became a place of stories and events – fairs and gatherings at the lake, joyful moments in tea gardens, and evenings spent in the company of friends, celebrating the spirit of the hills. The orange orchards, cardamom fields, and rolling tea estates shaped not only the local economy but also the identity of our people.

Mirik is more than a destination – it is a blend of cultures and traditions. From the soulful tunes of Nepali folk songs to vibrant festivals like Losar, Dashain, and Tihar, the community here thrives on unity and joy. Our cultural heritage is reflected in the warm hospitality of the locals, the unique flavors of our food – from steaming momos to traditional millet drinks – and the shared respect for nature that binds us together.

For me, Mirik will always be home – a land of love, nurturance, and inspiration. This project is my humble effort to share the beauty, history, and soul of Mirik with the world, so others too can feel the magic I grew up with.
      </p>
    </div>
  </section>

  <!-- Famous Places -->
  <section class="places py-5">
    <div class="container">
      <h2 class="section-title text-center">Famous Places in Mirik</h2>
      <div class="row g-4 align-items-center">
        
        <div class="col-md-6">
          <img src="assets/image/lakee.jpg" alt="Sumendu Lake" class="place-img-large">
        </div>
        <div class="col-md-6">
          <h3>Sumendu Lake</h3>
          <p>The heart of Mirik, where I spent countless evenings walking along its shores, surrounded by peaceful hills.</p>
        </div>

        <div class="col-md-6 order-md-2">
          <img src="assets/image/teaaa.jpg" alt="Tea Gardens" class="place-img-large">
        </div>
        <div class="col-md-6 order-md-1">
          <h3>Tea Gardens</h3>
          <p>Endless green slopes that shaped my love for nature and simplicity of life.</p>
        </div>

        <div class="col-md-6">
          <img src="assets/image/bokarr.jpg" alt="Bokar Monastery" class="place-img-large">
        </div>
        <div class="col-md-6">
          <h3>Bokar Monastery</h3>
          <p>A place of peace and spirituality, where I often went to find calm and reflection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Slideshow / Gallery Section -->
  <section class="gallery py-5">
    <div class="container">
      <h2 class="section-title text-center">Explore Mirik in Pictures</h2>
      
      <div id="mirikCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#mirikCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#mirikCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#mirikCarousel" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="assets/image/lakee.jpg" data-lightbox="mirik-gallery" data-title="Sumendu Lake - The centerpiece of Mirik, perfect for peaceful walks and boating.">
              <img src="assets/image/lakee.jpg" class="d-block w-100 gallery-img" alt="Sumendu Lake">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Sumendu Lake</h5>
              <p>The centerpiece of Mirik, perfect for peaceful walks and boating.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <a href="assets/image/teaaa.jpg" data-lightbox="mirik-gallery" data-title="Tea Gardens - Rolling green slopes that bring peace and beauty to the hills.">
              <img src="assets/image/teaaa.jpg" class="d-block w-100 gallery-img" alt="Tea Gardens">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Tea Gardens</h5>
              <p>Rolling green slopes that bring peace and beauty to the hills.</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <a href="assets/image/bokarr.jpg" data-lightbox="mirik-gallery" data-title="Bokar Monastery - A serene place of meditation and spiritual reflection.">
              <img src="assets/image/bokarr.jpg" class="d-block w-100 gallery-img" alt="Bokar Monastery">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Bokar Monastery</h5>
              <p>A serene place of meditation and spiritual reflection.</p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mirikCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mirikCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- Culture -->
  <section class="culture">
    <div class="container">
      <h2 class="section-title">Culture & Heritage</h2>
      <p>
        Mirik is not just about scenic beauty – it’s a melting pot of cultures, festivals, 
        and traditions. From Nepali folk songs echoing through the hills to the vibrant 
        celebrations of Dashain and Tihar, every moment here carries heritage and pride.
      </p>
    </div>
  </section>

  <!-- Footer -->
  <?php include("includes/footer.php"); ?> 

  <!-- Bootstrap + Lightbox JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
</body>
</html>
