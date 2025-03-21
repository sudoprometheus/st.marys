<nav class="main-nav">
      <div class="logo">
        <a href="../pages/index.php "> <img src="../images/logo.svg" alt="Site Logo"></a>
      </div>
    
      <button class="nav-toggle" id="navToggle">
        MENU
      </button>
      <ul class="nav-menu" id="navMenu">
        <li><a href="../pages/index.php" class="active">Home</a></li>
        <li><a href="../pages/products.php">Our Products</a></li>
        <li><a href="../pages/about.php">About Us</a></li>
        <li><a href="../pages/locations.php">Locations</a></li>
        <li><a href="../pages/contact.php">Contact Us</a></li>
      </ul>
</nav>

<script>
  const navToggle = document.getElementById("navToggle");
  const navMenu = document.getElementById("navMenu");

  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("open");
  });
</script>