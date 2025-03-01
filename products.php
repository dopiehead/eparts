<?php require("engine/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php include("components/links.php"); ?>
    <title>Products</title>
    <link rel="stylesheet" href="assets/css/products.css">
    <style>

  
  /* Search Bar */
  .search-container {
    width: 100%;
    max-width: 400px;
    margin-right: 1.5rem;
  }
  
  .search-form {
    display: flex;
    position: relative;
  }
  
  .search-form input {
    border-radius: 50px;
    padding-left: 1rem;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }
  
  .search-form input:focus {
    box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.2);
    border-color: #dc3545;
  }
  
  .search-btn {
    border-radius: 0 50px 50px 0;
    position: absolute;
    margin-top:0.2em;
    right: 0.2em;
    padding: 0.375rem 1rem;
  }
  
  /* Categories Dropdown */
  .categories-nav-item {
    position: relative !important;
  }
  
  /* Make dropdown work on hover */
  .categories-nav-item:hover .dropdown-menu {
    display: block !important;
  }
  
  .dropdown-menu.categories-dropdown {
    width: 500px;
    padding: 0;
    border-radius: 8px;
    border: none;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-top: 0; /* Remove default margin */
  }
  
  .categories-header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #eaeaea;
    font-weight: bold;
  }
  
  .categories-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 10px !important;
  }
  
  .category-item {
    display: flex;
    justify-content:start;
    align-items:start;
    gap:10px !important;
    padding: 5px 5px;
    color: #333;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.2s ease;
  }
  
  .category-item i {
    font-size: 1.1rem;
    color: #dc3545;
  }
  
  .category-item:hover {
    background-color: #f8f9fa;
    color: #dc3545;
  }
  
  /* Icon Navigation */
  .nav-icons {
    display: flex;
    gap: 1.5rem;
    align-items: center;
  }
  
  .nav-icon-link {
    position: relative;
    color: #333;
    transition: color 0.2s ease;
  }
  
  .nav-icon-link i {
    font-size: 1.4rem;
  }
  
  .nav-icon-link:hover {
    color: #dc3545;
  }

  
  /* Media Queries for Responsiveness */
  @media (max-width: 991px) {
    .search-container {
      max-width: 100%;
      margin: 1rem 0;
    }
    
    .navbar-nav {
      margin: 1rem 0;
    }
    
    .dropdown-menu.categories-dropdown {
      width: 100%;
    }
    
    .categories-grid {
      grid-template-columns: 1fr;
    }
 
  }

  .ative-button{
    background-color:red;
    color:white;
  }

  .btn-category{
    cursor: pointer;
  }
  
    </style>
</head>
<body>
    <?php include("components/navbar.php"); ?>
    <div class="red-header">
        <div class="container">
            <nav class="text-white">
                <a href="index.php" class="text-white text-decoration-none">Home</a> /
            </nav>
        </div>
    </div>

    <div class="container mt-4">
        <div class="search-bar">
            <div class="row align-items-center">
                <div class="col-md-2">
                     <select name="condition" class='border border-1 border-muted px-1 py-1 rounded rounded-2 btn-condition'>
                           <option value="">Choose condition</option>
                           <option value="new">New</option>
                           <option value="used">Tokunbo</option>
                     </select>
                  </div>
                <div class="col-md-8">
                    <div class="d-flex">
                        <span class="me-3">Sort by:</span>
                        <select name='sort' id='sort' class="form-select w-25">
                            <option class='recent'>Latest</option>
                            <option class='views'>Most viewed</option>
                            <option value="promo">Discount</option>
                            <option value="lowest">Lowest Price</option>
                            <option value="highest">Highest Price</option>
                            <option value="featured">Featured</option>
    
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <input name='q' id='q' type="search" class="form-control" placeholder="Search">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 sidebar">
                <h5><a class='btn-category text-dark' id = "">All Categories</a></h5>
                <?php
                
                 $category =  $conn->prepare("SELECT COUNT(*) AS count, product_category FROM products GROUP BY product_category");
                 $category->execute();
                 $result = $category->get_result();
                 while ($data_category = $result->fetch_assoc()){ ?>
                    
                    <div class="category-item">
                         <span class='text-capitalize btn-category' id='<?=htmlspecialchars($data_category['product_category']) ?>'><?=htmlspecialchars($data_category['product_category']) ?></span>
                         <span class="category-count">(<?=htmlspecialchars($data_category['count']) ?>)</span>
                     </div>

                <?php
                 }  
                ?>
                
                <h5 class="mt-4">Price  <span class='text-sm price_info'></span></h5>
                <?php

                  $sql = "SELECT MIN(product_price) AS min_price, MAX(product_price) AS max_price FROM products";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
    
                      $row = $result->fetch_assoc();
                      $minPrice = $row['min_price'];
                      $maxPrice = $row['max_price'];

} else {
    echo "No prices found.";
}
?>

                <input type="range" name="price_range" class="price_range" min="<?= htmlspecialchars($minPrice)?>" value='<?= htmlspecialchars($maxPrice)?>' max="<?= htmlspecialchars($maxPrice)?>">
                <div class="mt-2 text-muted"> <i class='fas fa-naira-sign'> </i> <?=htmlspecialchars(number_format($minPrice))?> -  <i class='fas fa-naira-sign'></i><?= htmlspecialchars(number_format($maxPrice))?></div>
            </div>

            <div class="col-md-9">
                <div class="row">
                   
                 <div id ='spinner' class='d-flex justify-content-center align-items-center'>
                      
                      <span class='spinner-border text-secondary fs-3'></span>

                 </div>

                    <div class='product-container'>

                    </div>
         
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include("components/footer.php");?>
  
    <script>

           $(document).ready(function(){



    });

    </script>

<script>
    $(document).ready(function(){
        // Load initial products
        $(".spinner-border").hide();
        $(".product-container").load("engine/fetch-all.php");

        // Search functionality
        $("#q").on("keyup", function(e){
             e.preventDefault(); 

             let x = $("#q").val(); 

             getData(x); 
        });

        // Category filter functionality
        $(".btn-category").on("click", function(e){
            $(".btn-category").removeClass("active-button");
            $(this).addClass("active-button");
            e.preventDefault();
            let x = $("#q").val(); 
            let category = $(this).attr("id") || ''; 
    
            getData(x, category); 
        });

        // Condition filter (new, used) functionality
        $(".btn-condition").on("change", function(e){  
            e.preventDefault(); 

            let x = $("#q").val(); 
            let category = $(".btn-category").attr("id") || '';
            let condition = $(".btn-condition").val() || ''; 


            getData(x, category, condition); 
        });

        // Price range filter functionality
        $(".price_range").on("change", function(){
            var price_range = $(".price_range").val();

            $(".price_info").html('<span class="text-success"><i class="fas fa-naira-sign"></i>' + price_range + '</span>');

            let x = $("#q").val(); 
            let category = $(".btn-category").attr("id") || '';
            let condition = $(".btn-condition").val() || ''; 

            getData(x, category, condition, price_range);
        });

        // Sorting functionality
        $("#sort").on("change", function(e){
            e.preventDefault();

            let x = $("#q").val(); 
            let category = $(".btn-category").attr("id") || '';
            let condition = $(".btn-condition").val() || ''; 
            let price_range = $(".price_range").val() || ''; 
            let sort = $("#sort").val() || ''; 

            getData(x, category, condition, price_range, sort);  
        });

        // Pagination functionality
        $(document).on('click', '.btn-success', function(e){
            e.preventDefault();
            e.stopImmediatePropagation();

            let x = $("#q").val(); 
            let category = $(".btn-category").attr("id") || '';
            let condition = $(".btn-condition").val() || ''; 
            let price_range = $(".price_range").val() || ''; 
            let sort = $("#sort").val() || '';  
            var page = $(this).attr("id") || 1; // Default to page 1 if undefined

            getData(x, category, condition, price_range, sort, page); 
        });

        // Function to fetch and display data
        function getData(x, category, condition, price_range, sort, page = 1) {
            $(".spinner-border").show(); // Show the spinner
            $.ajax({
                url: "engine/fetch-all.php", 
                method: "POST",
                data: { 
                    q: x,
                    category: category,
                    condition: condition,
                    price_range: price_range,
                    sort: sort,
                    page: page
                }, 
                success: function(data) {
                    $(".spinner-border").hide(); // Hide the spinner after data is received
                    $(".product-container").html(data);  // Update product container with new data
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("Error: " + textStatus + ": " + errorThrown);
                    $(".spinner-border").hide(); // Hide the spinner if there's an error
                }
            });
        }
    });
</script>




</body>
</html>