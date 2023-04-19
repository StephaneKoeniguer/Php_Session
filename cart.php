<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
      
        <?php 
            echo "<br>";
            foreach ($_SESSION['cart'] as $key => $product) {
                echo "Produit: " . $key . ' ' . " quantité " . $product;
                echo "<br>";
            }
         ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
