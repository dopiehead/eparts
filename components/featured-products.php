<div class="container">
    <h2 class="mt-4">FEATURE PRODUCTS</h2>
    <div class="category-filters">
        <button id='car part' class="filter-btn active btn-category btn-auto">AUTOMOTIVE</button>
        <button id='phone part' class="filter-btn btn-category">PHONES</button>
        <button id='electronic' class="filter-btn btn-category">ELECTRONICS</button>
    </div>
    
    <!-- display product grid -->
    <div class="products-grid product-container">
        <!-- Products will be dynamically loaded here -->
    </div>
</div>

<script>
   $(document).ready(function(){
       
         loadCategoryProducts('car part'); 
         $(document).on("click", ".btn-category", function(){        
             $(".btn-category").removeClass("active");                
             $(this).addClass("active");
             let category = $(this).attr("id");
             if(category.length > 0){
                 loadCategoryProducts(category);
             }
         });

         function loadCategoryProducts(category) {
             $.ajax({
                 url: "engine/fetch-products.php",
                 method: "POST",
                 data: { category: category },
                 success: function(data) {                
                     $(".product-container").html(data);
                 },
                 error: function() {  
                     alert("Error loading products.");
                 }
             });
         }

   });
</script>
