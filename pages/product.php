<!DOCTYPE html>
<html lang="en">
<?php
$products = [
  1 => [
    'name' => 'Organic Layer Pellets',
    'description' => 'Premium organic layer pellets with essential nutrients for egg-laying hens.',
    'image' => '../images/2.svg'
  ],
  2 => [
    'name' => 'Grain-Free Starter Crumble',
    'description' => 'A high-protein starter feed perfect for chicks during their first few weeks.',
    'image' => '../images/3.svg'
  ],
  3 => [
    'name' => 'All-Natural Scratch Mix',
    'description' => 'A tasty scratch mix to keep backyard chickens engaged and happy.',
    'image' => '../images/6.svg'
  ]
];
$id = $_GET['id'] ?? null;

if (!$id || !isset($products[$id])) {
  // Show 404 or redirect if product not found
  header("HTTP/1.0 404 Not Found");
  echo "<h1>Product Not Found</h1>";
  exit;
}

$product = $products[$id];
?>


<head>
  <link rel="stylesheet" href="../styles/product.css">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'; ?>
</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/navbar.php'; ?>

  <div class="product-container">
    <div class="product-image">
      <img src="<?= htmlspecialchars($product['image']) ?>" alt="Product Image">
    </div>
    <div class="product-details">
      <h1><?= htmlspecialchars($product['name']) ?></h1>
      <p>
        <?= htmlspecialchars($product['description']) ?>
      </p>
      <a href="../pages/contact.php" class="quote-button">Get a Quote</a>
    </div>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
</body>
</html>
