<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mirik - Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS (needed for toggle) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Central Header -->
  <?php include("includes/header.php"); ?> 

  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h1>Welcome to Mirik</h1>
      <p>Discover the beauty of Mirik Lake, explore our schools, and learn about this wonderful hill town.</p>
    </div>
  </section>

  <!-- Famous Places Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Famous Places in Mirik</h2>
    <div class="row g-4">
      
      <!-- Mirik Lake -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="assets\image\Mirik.jpg" class="card-img-top" alt="Mirik Lake">
          <div class="card-body">
            <h5 class="card-title">Mirik Lake</h5>
            <p class="card-text">Also known as Sumendu Lake, this is the most popular attraction in Mirik. Surrounded by pine trees and tea gardens, the lake has a scenic walking trail and boating facilities.</p>
          </div>
        </div>
      </div>

      <!-- Bokar Monastery -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="assets\image\bokarr.jpg" class="card-img-top" alt="Bokar Monastery">
          <div class="card-body">
            <h5 class="card-title">Bokar Monastery</h5>
            <p class="card-text">One of the largest Buddhist monasteries in the region, Bokar Monastery is a peaceful spiritual center offering stunning views of the hills and valleys around Mirik.</p>
          </div>
        </div>
      </div>

      <!-- Tea Gardens -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="assets\image\tea.jpg" class="card-img-top" alt="Tea Gardens of Mirik">
          <div class="card-body">
            <h5 class="card-title">Tea Gardens</h5>
            <p class="card-text">Mirik is surrounded by sprawling tea estates like Thurbo and Sourenee. Visitors can enjoy a walk through the lush green plantations and learn about Darjeeling tea.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Central Footer -->
  <?php include("includes/footer.php"); ?>

  <!-- Navbar JS -->
  <script src="assets/js/main.js">
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".navbar ul");

    toggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  </script>

</body>
</html>
