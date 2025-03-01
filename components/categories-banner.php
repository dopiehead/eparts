
<?php include("engine/config.php"); ?>
<div class="showcase-grid">
        <div>
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/background/car-lights.png')">
                <h2>Car Lights</h2>
                <p>Check Out For<br>Your Car Lights</p>
            </div>
            <div class="product-grid mt-3">
                <?php $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE '%light%' AND product_category LIKE '%car part%'");
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
                <a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><img src="<?=htmlspecialchars($product_image);?>" alt="<?=htmlspecialchars($product_name);?>" class="product-image"></a>
                    <div class="product-info">
                        <div> <span class='text-capitalize fw-bold'><?=htmlspecialchars($product_name) ?></span>   </div>
                        <div class="price"><i class='fas fa-naira-sign'></i><?=htmlspecialchars($product_price)?></div>
                        <div class="stars">★★★★★</div>
                        <div class="meta-info">
                            <span><i class="bi bi-person"></i> By <?= htmlspecialchars($seller_details_name) ?></span>
                            <span class='text-capitalize'><i class="bi bi-calendar"></i> <?=htmlspecialchars($product_date)?></span>               
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <!-- Repeat product-card div twice more for other light products -->
            </div>
        </div>

        <div>
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/background/car-tires.png')">
                <h2>Car Tires</h2>
                <p>Check Out For<br>Your Car Tires</p>
            </div>
            <div class="product-grid mt-3">
            <?php $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE '%tyre%' AND product_category LIKE '%car part%'");
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
                <a class='text-decoration-none text-dark text-capitalize' href="product-details.php?id=<?=htmlspecialchars($product_id) ?>"><img src="<?=htmlspecialchars($product_image);?>" alt="<?=htmlspecialchars($product_name);?>" class="product-image"></a>
                    <div class="product-info">
                        <div> <span class='text-capitalize fw-bold'><?=htmlspecialchars($product_name) ?></span>   </div>
                        <div class="price"><i class='fas fa-naira-sign'></i><?=htmlspecialchars($product_price);?></div>
                        <div class="stars">★★★★★</div>
                        <div class="meta-info">
                            <span><i class="bi bi-person"></i> By <?= htmlspecialchars($seller_details_name) ?></span>
                            <span class='text-capitalize'><i class="bi bi-calendar"></i> <?=htmlspecialchars($product_date);?></span>                        
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <!-- Repeat product-card div twice more for other tire products -->
            </div>
        </div>
    </div>