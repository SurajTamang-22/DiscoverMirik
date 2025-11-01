<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourist Spots - Discover Mirik</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Lightbox2 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- Header -->
  <?php include("includes/header.php"); ?> 

  <main class="container py-5">
    <h1 class="fw-bold mb-4 text-center">Famous Tourist Spots in Mirik</h1>
    <div class="row g-4">
      
      <!-- Spot 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets/image/Mirik.jpg" data-lightbox="mirik-spots" data-title="Mirik Lake - Boating & scenic views">
            <img src="assets/image/Mirik.jpg" class="card-img-top" alt="Mirik Lake">
          </a>
          <div class="card-body text-center">
            <h5>Mirik Lake</h5>
            <p>Boating & scenic views.</p>
          </div>
        </div>
      </div>

      <!-- Spot 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets/image/tea.jpg" data-lightbox="mirik-spots" data-title="Tea Gardens - Refreshing greenery and tea plantations">
            <img src="assets/image/tea.jpg" class="card-img-top" alt="Tea Gardens">
          </a>
          <div class="card-body text-center">
            <h5>Tea Gardens</h5>
            <p>Refreshing greenery & plantations.</p>
          </div>
        </div>
      </div>

      <!-- Spot 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets/image/orangeeeee.jpg" data-lightbox="mirik-spots" data-title="Orange Orchards - Famous for Mirik oranges">
            <img src="assets/image/orangeeeee.jpg" class="card-img-top" alt="Orange Orchards">
          </a>
          <div class="card-body text-center">
            <h5>Orange Orchards</h5>
            <p>Famous for juicy Mirik oranges.</p>
          </div>
        </div>
      </div>

      <!-- Spot 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets/image/bokarr.jpg" data-lightbox="mirik-spots" data-title="Bokar Monastery - Peaceful meditation place">
            <img src="assets/image/bokarr.jpg" class="card-img-top" alt="Bokar Monastery">
          </a>
          <div class="card-body text-center">
            <h5>Bokar Monastery</h5>
            <p>Peaceful Buddhist monastery.</p>
          </div>
        </div>
      </div>

      <!-- Spot 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets\image\durga.jpg" data-lightbox="mirik-spots" data-title="Devi Sthan Temple - A popular spiritual spot in Mirik">
            <img src="assets\image\durga.jpg" class="card-img-top" alt="Devi Sthan">
          </a>
          <div class="card-body text-center">
            <h5>Devi Sthan Temple</h5>
            <p>Spiritual & cultural importance.</p>
          </div>
        </div>
      </div>

      <!-- Spot 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow spot-card">
          <a href="assets\image\Swiss.jpg" data-lightbox="mirik-spots" data-title="Swiss Cottage - A serene spot with great views near Mirik">
            <img src="assets\image\Swiss.jpg" class="card-img-top" alt="Swiss Cottage">
          </a>
          <div class="card-body text-center">
            <h5>wiss Cottage</h5>
            <p>Beautiful cotages by the hills with great views.</p>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <?php include("includes/footer.php"); ?> 

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
