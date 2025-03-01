<?php  require("engine/config.php"); ?>

     <div class="category-section">
        <div class="section-header">
            <div class="section-title">CAR PARTS</div>
            <a href="#" class="see-all">See All</a>
        </div>
        <div class="category-grid">
         <?php 
         $get_categories = $conn->prepare("SELECT * FROM categories where category_type like '%car%'");
         $get_categories->execute();
         $categories = $get_categories->get_result();
         while($category = $categories->fetch_assoc()):
             include("contents/car-categories-content.php");
         ?>             
          <div class="category-item d-flex flex-row flex-column">
                 <img src="<?=htmlspecialchars($category_image);?>" alt="<?=htmlspecialchars($category_name);?>">
                 <div class="category-name"><?=htmlspecialchars($category_name);?></div>
                 <div class="item-count">0 items</div>
            </div>

            <?php endwhile; ?>
            
        </div>

    </div>
