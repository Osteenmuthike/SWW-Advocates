<?php include 'includes/header.php'; ?>

<section class="content">
  <h2>Contact Us</h2>

  <?php if (isset($_GET['success'])): ?>
    <p style="color: green;">Your message has been sent successfully.</p>
  <?php elseif (isset($_GET['error'])): ?>
    <p style="color: red;">Something went wrong. Please try again.</p>
  <?php endif; ?>

  <form method="POST" action="save_contact.php" class="contact-form">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Subject</label>
    <textarea name="subject" rows="4" required></textarea>

    <button type="submit">Send Message</button>
  </form>
</section>

<?php include 'includes/footer.php'; ?>
