<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Mirik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Central Header -->
  <?php include("includes/header.php"); ?> 

  <!-- Contact Form -->
  <section class="contact-form">
    <h1 style="text-align:center; margin-bottom:1rem;">Contact Us</h1>
    <form id="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <!-- Developer Section -->
  <section class="developer-info">
    <div class="dev-card">
      <img src="assets/image/IMG20241223101841 (1).png" alt="Developer Image">
      <div class="dev-details">
        <h3>Suraj Tamang</h3>
        <p>Developer & Designer of this Mirik Project</p>
        <p>"Building this project to showcase my hometown’s beauty and culture."</p>
      </div>
    </div>
  </section>

  <!-- Central Footer -->
  <?php include("includes/footer.php"); ?>

  <!-- EmailJS SDK -->
  <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  <script>
    (function(){
      // 🔹 Your EmailJS Public Key
      emailjs.init("d6Eai1BJMVQVI_aYR");
    })();

    const contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const button = contactForm.querySelector('button');
      button.disabled = true;
      button.textContent = "Sending...";

      // Grab form values
      const name = contactForm.name.value.trim();
      const email = contactForm.email.value.trim();
      const message = contactForm.message.value.trim();

      if (!name || !email || !message) {
        alert("Please fill all fields!");
        button.disabled = false;
        button.textContent = "Send Message";
        return;
      }

      console.log("Form Data:", { name, email, message });

      // Step 1: Send email to ADMIN
      emailjs.sendForm("service_205g5pj", "template_ecgj07u", contactForm)
        .then(() => {
          console.log("✅ Admin notification sent");

          // Step 2: Send AUTO-REPLY to USER
          return emailjs.send("service_205g5pj", "template_k1k0axp", {
            name: name,
            email: email
          });
        })
        .then(() => {
          console.log("✅ Auto-reply sent to user");
          alert("Message sent successfully! Thank you for contacting us.");
          contactForm.reset();
        })
        .catch((err) => {
          console.error("❌ Error sending email:", err);
          alert("Oops! Something went wrong. Please try again later.");
        })
        .finally(() => {
          button.disabled = false;
          button.textContent = "Send Message";
        });
    });
  </script>
   <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
