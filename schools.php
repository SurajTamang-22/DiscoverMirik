<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Schools in Mirik</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/schools.css"/>
</head>
<body>
  <?php include("includes/header.php"); ?> 

    <main class="container py-5">
    <header class="d-flex flex-column flex-md-row align-items-md-end gap-3 mb-4">
      <div class="me-auto">
        <h1 class="display-3 fw-bold mb-1">Schools in Mirik</h1>

        <p class="text-muted mb-0">Browse verified schools in/around Mirik and open them directly on Google Maps.</p>
      </div>
    </header>

    <!-- Local Filter + Internet Search -->
    <section class="mb-4">
      <div class="row g-3">
        <!-- Local filter -->
        <div class="col-12 col-lg-6">
          <label for="localFilter" class="form-label fw-semibold">Filter schools on this page</label>
          <input id="localFilter" type="text" class="form-control form-control-lg" placeholder="Type to filter… e.g., Don Bosco, CBSE, Primary"/>
          <div class="form-text">Instantly filters the cards listed below.</div>
        </div>

        <!-- Internet search -->
        <div class="col-12 col-lg-6">
          <label for="globalQuery" class="form-label fw-semibold">Search the internet for other schools</label>
          <div class="input-group input-group-lg">
            <input id="globalQuery" type="text" class="form-control" placeholder="Try: Convent school near Mirik, CBSE schools in Mirik…" />
            <button id="btnGoogle" class="btn btn-outline-primary" type="button" title="Google Search">Google</button>
            <button id="btnMaps" class="btn btn-primary" type="button" title="Google Maps Search">Maps</button>
          </div>
          <div class="form-text">Opens Google or Google Maps in a new tab with your search.</div>
        </div>
      </div>
    </section>

    <!-- Schools Grid -->
    <section>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4" id="schoolsGrid">
        <!-- Don Bosco, Mirik -->
        <article class="col">
          <div class="school-card h-100" data-name="Don Bosco Higher Secondary School Mirik" data-tags="state board catholic co-educational hs higher secondary">
            <div class="ratio ratio-16x9">
              <img src="assets\image\Don_Bosco.jpg" class="card-img-top object-fit-cover" alt="Don Bosco Higher Secondary School, Mirik">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Don Bosco Higher Secondary School, Mirik</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">State Board</span>
                <span class="badge rounded-pill text-bg-light border">Co-ed</span>
                <span class="badge rounded-pill text-bg-light border">HS</span>
              </div>
              <p class="card-text small mb-2">
                Recognized, minority (Catholic) co-educational school managed by Don Bosco Centre; noted for academics & activities.
              </p>
              <ul class="list-unstyled small mb-3">
                <li><strong>Area:</strong> Mirik, Darjeeling 734214</li>
                <li><strong>Phone:</strong> +91 89670 95638</li>
                <li><strong>Email:</strong> donboscomirik@gmail.com</li>
              </ul>
              <div class="d-flex gap-2">
                <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Don+Bosco+School+Mirik">Open in Maps</a>
                <a class="btn btn-sm btn-outline-secondary" target="_blank" rel="noopener" href="https://dbsmirik.org/">Website</a>
              </div>
            </div>
          </div>
        </article>

        <!-- Snowdrops School -->
        <article class="col">
          <div class="school-card h-100" data-name="Snowdrops School Mirik" data-tags="cbse co-ed senior secondary 1988 krishnanagar">
            <div class="ratio ratio-16x9">
              <img src="assets\image\snowdrop.jpg" class="card-img-top object-fit-cover" alt="Snowdrops School, Mirik">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Snowdrops School, Mirik</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-primary">CBSE</span>
                <span class="badge rounded-pill text-bg-light border">Co-ed</span>
                <span class="badge rounded-pill text-bg-light border">Sr. Sec.</span>
              </div>
              <p class="card-text small mb-2">
                Established in 1988 at Krishnanagar; CBSE-affiliated senior secondary with academics plus sports & activities.
              </p>
              <ul class="list-unstyled small mb-3">
                <li><strong>Area:</strong> Krishnanagar, Mirik 734214</li>
                <li><strong>Website:</strong> snowdropsschool.org</li>
                <li><strong>CBSE Aff. No.:</strong> 2430179</li>
              </ul>
              <div class="d-flex gap-2">
                <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Snowdrops+School+Mirik">Open in Maps</a>
                <a class="btn btn-sm btn-outline-secondary" target="_blank" rel="noopener" href="https://www.snowdropsschool.org/">Website</a>
              </div>
            </div>
          </div>
        </article>

        <!-- Mirik Higher Secondary School (Govt.) -->
        <article class="col">
          <div class="school-card h-100" data-name="Mirik Higher Secondary School" data-tags="government state board co-educational higher secondary hs">
            <div class="ratio ratio-16x9">
              <img src="assets\image\high.jpg" class="card-img-top object-fit-cover" alt="Mirik Higher Secondary School">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Mirik Higher Secondary School</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">State Board</span>
                <span class="badge rounded-pill text-bg-light border">Govt.</span>
                <span class="badge rounded-pill text-bg-light border">HS</span>
              </div>
              <p class="card-text small mb-2">
                Government co-educational school offering classes 5–12, serving students within Mirik Municipality.
              </p>
              <ul class="list-unstyled small mb-3">
                <li><strong>Block:</strong> Mirik Municipality</li>
              </ul>
              <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Mirik+Higher+Secondary+School">Open in Maps</a>
            </div>
          </div>
        </article>

        <!-- Woodlands Academy (Primary) -->
        <article class="col">
          <div class="school-card h-100" data-name="Woodlands Academy School Mirik" data-tags="primary government co-educational">
            <div class="ratio ratio-16x9">
              <img src="assets\image\woodlands.jpg" class="card-img-top object-fit-cover" alt="Woodlands Academy School">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Woodlands Academy School</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">Primary</span>
                <span class="badge rounded-pill text-bg-light border">Co-ed</span>
              </div>
              <p class="card-text small mb-2">
                Primary school (Grades 1–5) within Mirik Municipality.
              </p>
              <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Woodlands+Academy+School+Mirik">Open in Maps</a>
            </div>
          </div>
        </article>

        <!-- Mirik Acadamy -->
        <article class="col">
          <div class="school-card h-100" data-name="Mirik Acadamy" data-tags="private  co-educational ">
            <div class="ratio ratio-16x9">
              <img src="assets\image\Mirikk.jpg" class="card-img-top object-fit-cover" alt="Mirik Acadamy">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Mirik Acadamy</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">Primary</span>
                <span class="badge rounded-pill text-bg-light border">Co-ed</span>
              </div>
              <p class="card-text small mb-2">
                Co-educational primary school (Grades 1–4) located under Mirik Municipality (Ward No. 3).
              </p>
              <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Mirik+Primary+School+Darjeeling">Open in Maps</a>
            </div>
          </div>
        </article>

        <!-- Thurbo Higher Secondary School (Mirik Block) -->
        <article class="col">
          <div class="school-card h-100" data-name="Thurbo Higher Secondary School" data-tags="higher secondary co-educational pahilagaon mirik block">
            <div class="ratio ratio-16x9">
              <img src="assets\image\thurboo.jpg" class="card-img-top object-fit-cover" alt="Thurbo Higher Secondary School">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Thurbo Higher Secondary School</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">State Board</span>
                <span class="badge rounded-pill text-bg-light border">HS</span>
              </div>
              <p class="card-text small mb-2">
                Co-educational Higher Secondary school in Pahilagaon within the Mirik Block.
              </p>
              <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Thurbo+Higher+Secondary+School+Mirik">Open in Maps</a>
            </div>
          </div>
        </article>

        <!-- Brindavan Boarding School (private unaided, upper primary) -->
        <article class="col">
          <div class="school-card h-100" data-name="Brindavan Boarding School " data-tags="upper primary private unaided english medium">
            <div class="ratio ratio-16x9">
              <img src="assets\image\brindhawan.jpg" class="card-img-top object-fit-cover" alt="Brindavan Boarding School, Mirik">
            </div>
            <div class="card-body">
              <h2 class="h5 card-title mb-1">Brindavan Boading School, Mirik</h2>
              <div class="badges mb-2">
                <span class="badge rounded-pill text-bg-secondary">Upper Primary,Higher</span>
                <span class="badge rounded-pill text-bg-light border">Private</span>
              </div>
              <p class="card-text small mb-2">
                Private unaided English-medium school (est. 1998) serving Mirik Municipality area.
              </p>
              <a class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=St+Joseph%27s+School+Mirik">Open in Maps</a>
            </div>
          </div>
        </article>

      </div>
    </section>

    <!-- Big Map of Mirik button -->
    <div class="text-center mt-5">
      <a class="btn btn-lg btn-success px-4" target="_blank" rel="noopener" href="https://www.google.com/maps/place/Mirik,+West+Bengal+734214">📍 View Mirik on Google Maps</a>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script>
    // Local filter (client-side search in your cards)
    const filterInput = document.getElementById('localFilter');
    const grid = document.getElementById('schoolsGrid');
    const cards = Array.from(grid.querySelectorAll('.school-card'));

    function normalize(str){ return (str || '').toLowerCase().trim(); }

    filterInput.addEventListener('input', () => {
      const q = normalize(filterInput.value);
      cards.forEach(card => {
        const hay = (card.dataset.name + ' ' + (card.dataset.tags || '')).toLowerCase();
        card.closest('.col').style.display = hay.includes(q) ? '' : 'none';
      });
    });

    // Internet search shortcuts
    const qInput = document.getElementById('globalQuery');
    const btnGoogle = document.getElementById('btnGoogle');
    const btnMaps = document.getElementById('btnMaps');

    function openNew(url){ window.open(url, '_blank', 'noopener'); }

    btnGoogle.addEventListener('click', () => {
      const q = encodeURIComponent(qInput.value.trim() || 'schools in Mirik West Bengal');
      openNew('https://www.google.com/search?q=' + q);
    });

    btnMaps.addEventListener('click', () => {
      const q = encodeURIComponent(qInput.value.trim() || 'schools in Mirik');
      openNew('https://www.google.com/maps/search/?api=1&query=' + q);
    });
  </script>
</body>
</html>
