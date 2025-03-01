<?php 
   require("engine/config.php");
?>
<div class="showcase-grid">

        <div>
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/banner/phone-parts.png')">
                <h2>Phone Parts</h2>
                <p>Check Out For<br>Your Phone Parts</p>
            </div>

            <div class="product-grid mt-3">
              
             <?php
             
                 $stmt = $conn->prepare("SELECT * FROM products WHERE product_category like '%phone part%' ORDER BY product_id DESC LIMIT 6 "); 
                 $stmt->execute();
                 $result = $stmt->get_result();
                 while($product = $result->fetch_assoc()):
                      include ("contents/product-contents.php");
                      $stmt_poster = $conn->prepare("SELECT * FROM user_profile WHERE id = ?");
                      $stmt_poster->bind_param("i", $poster_id);
                      $stmt_poster->execute();
                      $result_x = $stmt_poster->get_result();
                      $seller = $result_x->fetch_assoc();
                      include("contents/seller-contents.php");
                      
             ?>

                <div class="product-card">
                <a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><img src="<?= htmlspecialchars($product_image); ?>" alt="<?=htmlspecialchars($product_name);?>" class="product-image"></a>
                    <div class="product-info">
                        <div class="product-title"><a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><?=htmlspecialchars($product_name);?></a></div>
                        <div class="price"><i class='fas fa-naira-sign'></i><?=htmlspecialchars($product_price);?></div>
                        <div class="stars">★★★★★</div>
                        <div class="meta-info">
                            <span><i class="bi bi-person"></i> By <?= htmlspecialchars($seller_details_name) ?></span>
                            <span><i class="bi bi-calendar"></i> <?=htmlspecialchars($product_date);?></span>
                           
                        </div>
                    </div>
                </div>

             <?php endwhile;?>

                
            </div>
        </div>

        <div>
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/banner/electronics.png')">
                <h2>Electronics</h2>
                <p>Check Out For<br>Your Electronics</p>
            </div>
            <div class="product-grid mt-3">

            <?php
             
             $stmt2 = $conn->prepare("SELECT * FROM products WHERE product_category like '%electronic part%' ORDER BY product_id DESC LIMIT 6 "); 
             $stmt2->execute();
             $result = $stmt2->get_result();
             while($product = $result->fetch_assoc()):
                  include ("contents/product-contents.php");
                  $stmt_poster = $conn->prepare("SELECT * FROM user_profile WHERE id = ?");
                  $stmt_poster->bind_param("i", $poster_id);
                  $stmt_poster->execute();
                  $result_x = $stmt_poster->get_result();
                  $seller = $result_x->fetch_assoc();
                  include("contents/seller-contents.php");
        
             ?>
                <div class="product-card">
                <a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><img src="<?=htmlspecialchars($product_image)?>" alt="<?= htmlspecialchars($product_name);?>" class="product-image"></a>
                    <div class="product-info">
                        <div class="product-title"><a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><?= htmlspecialchars($product_name)?></a></div>
                        <div class="price"><i class='fas fa-naira-sign'></i><?= htmlspecialchars($product_price)?></div>
                        <div class="stars">★★★★★</div>
                        <div class="meta-info">
                            <span><i class="bi bi-person"></i> By <?= htmlspecialchars($seller_details_name) ?></span>
                            <span class='text-capitalize'><i class="bi bi-calendar"></i> &nbsp;<?=htmlspecialchars($product_date)?></span>
                           
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>


                
            </div>
        </div>
    </div>
   