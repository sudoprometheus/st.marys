<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/contact.css">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/head.php';?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/navbar.php';?>
  <div class="page-wrapper">
<section id="contact-info" class="intro-section">
    <div class="contact-left">
      <h2>St. Marys Feeds</h2>
      <p>If you have any questions or inquiries, please reach out ...</p>
  
      <address>
        123 Street alns<br>
        Earth, CB NN EDEC<br>
        Phone: 555-1234
      </address>
  
      <div class="social-links">
        </a>
      </div>
    </div>
  
    <div class="contact-right">
      <form class="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';?>

</body>
</html>
