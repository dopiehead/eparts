<!-- Corrected Navbar with Working Dropdown -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-2">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="bi bi-gear-fill"></i>
      <div class="brand-text">E-<span>Parts</span></div>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="search-container me-auto">
        <div class="search-form">
          <input type="search" class="form-control" placeholder="Search for parts...">
          <button class="btn btn-danger search-btn"><i class="bi bi-search"></i></button>
        </div>
      </div>
      
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown categories-nav-item">
          <a class="nav-link dropdown-toggle" href="products.php" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu categories-dropdown" aria-labelledby="categoriesDropdown">
            <div class="categories-header">
              <i class="bi bi-list"></i>
              <span>ALL CATEGORIES</span>
            </div>
            <div class="categories-grid">
              <a href="products.php?category=car+parts" class="category-item">
                <i class="bi bi-car-front"></i>
                <span>Car Parts</span>
              </a>
              <a href="products.php?category=trunk+parts" class="category-item">
                <i class="bi bi-box"></i>
                <span>Trunk Parts</span>
              </a>
              <a href="products.php?category=bike+parts" class="category-item">
                <i class="bi bi-bicycle"></i>
                <span>Bike Parts</span>
              </a>
              <a href="products.php?category=plant+parts" class="category-item">
                <i class="bi bi-tree"></i>
                <span>Plant Parts</span>
              </a>
              <a href="products.php?category=phone+parts" class="category-item">
                <i class="bi bi-phone"></i>
                <span>Phone Parts</span>
              </a>
              <a href="products.php?category=electronic+parts" class="category-item">
                <i class="bi bi-cpu"></i>
                <span>Electronic Parts</span>
              </a>
              <a href="products.php?category=fan+parts" class="category-item">
                <i class="bi bi-fan"></i>
                <span>Fan Parts</span>
              </a>
              <a href="products.php?category=gas+cooker+parts" class="category-item">
                <i class="bi bi-fire"></i>
                <span>Gas Cooker Parts</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
      </ul>
      
      <div class="nav-icons">
        <a href="cart.php" class="nav-icon-link"><i class="bi bi-cart"></i><span class="cart-badge"><span class='numbering'></span></span></a>
       
        <?php if(!isset($_SESSION['user_id'])) { ?> 
          <a href="sign-in.php" class="nav-icon-link"><i class="bi bi-person"></i></a>
        <?php } else { if($_SESSION['user_role']=='Customer'){?>
          <a href="dashboard/user-dashboard.php" class="nav-icon-link"><i class="bi bi-person-fill"></i></a>
          <?php } else { ?>
          <a href="dashboard/user-dashboard.php" class="nav-icon-link"><i class="bi bi-person-fill"></i></a>  
          <?php } ?>
        <?php } ?>
        
      </div>
    </div>
  </div>
</nav>


<!-- Add this JavaScript to make the dropdown work with both click and hover -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Bootstrap dropdowns
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
  var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
  });
});
</script>
