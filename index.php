<?php session_start(); ?>
<html lang="en">
<head>
<?php
// Enable all error reporting
error_reporting(E_ALL);

// Display errors on the screen
ini_set('display_errors', 1);
?>

     <?php include("components/links.php") ?>

     <link rel="stylesheet" href="assets/css/categories.css">
     <link rel="stylesheet" href="assets/css/categories-banner.css">
     <link rel="stylesheet" href="assets/css/promotional-banner.css">
     <link rel="stylesheet" href="assets/css/product-categories.css">
     <link rel="stylesheet" href="assets/css/featured-products.css">
     <link rel="stylesheet" href="assets/css/blog.css">
     <title>Home</title>
     <style>
          
.nav-link:hover {
  color: #dc3545;
}

.nav-link.active {
  color: #dc3545;
}

.nav-link.active:after {
  content: '';
  position: absolute;
  bottom: -3px;
  left: 1rem;
  right: 1rem;
  height: 2px;
  background-color: #dc3545;
}
     </style>

</head>
<body>
     <?php include("components/navbar.php") ?>
     <?php include("components/hero-section.php")?>
     <?php include("components/categories.php")?>
     <?php include("components/categories-electronic.php")?>
     <?php include("components/categories-banner.php")?>
     <?php include("components/categories.php")?>
     <?php include("components/promotional-banner.php")?>
     <?php include("components/categories-phone.php")?>
     <?php include("components/product-categories.php")?>
     <?php include("components/featured-products.php")?>

     <?php include("components/blog.php")?>
     <?php include("components/footer.php")?>
     <a class="btn-down" onclick="topFunction()">&#8593;</a>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
