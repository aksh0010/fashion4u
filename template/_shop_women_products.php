<?php


$_SESSION['didUserFound'] = false;

$UserId = $_SESSION['SessionUserId'];

shuffle($women_products);
$itemIdsWishList = $cart->getItemIdFromCartId('wishlist', $_SESSION['SessionUserId']);
$itemIdsInCart = $cart->getItemIdFromCartId('cart', $_SESSION['SessionUserId']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addToCartButtonShopNow'])) {
        $cart->addToTable($_POST['item_id'], 'cart', $_SESSION['SessionUserId']);
   
    }
}

?>



<!-- shop now -->
<section class="sh" id="sh">
    <div class="shoph">
    <span><h1>Women's Collection</h1></span>
     
    </div>
    <div class="shcontain container-fluid">
        <?php

    
        foreach ($women_products as $item) :
        ?>
            <!-- product -->
            <div class="mainbx">
                <div class="imgbx">
                    <img src="<?php echo $item['item_image'] ?>" alt="<?php echo $item['item_name'] ?>" />
                </div>
                <div class="main-price">
                    <h3><?php echo $item['item_name'] ?></h3>
                    <div class="ratting">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                    </div>
                </div>
                <span>$<?php echo $item['item_price'] ?></span>
                <form method="POST">
                    <input type="hidden" name="user_id" value="1">
                    <input type="hidden" name="item_id" value=" <?php echo $item['item_id'] ?>">
                    <?php
                    if (in_array($item['item_id'], $itemIdsInCart)) {
                    ?>
                        <button class="disabled-cart-button" name="addToCartButtonShopNow" disabled>In The Cart</button>
                    <?php
                    } else if (in_array($item['item_id'], $itemIdsWishList)) {
                    ?>
                        <button class="disabled-cart-button" name="addToCartButtonShopNow" disabled>In The Wishlist</button>
                    <?php

                    } else {
                    ?>

                        <button class="bx bx-cart" name="addToCartButtonShopNow"></button>

                    <?php
                    }

                    ?>
                </form>
            </div>
            <!--! product -->
        <?php
        endforeach;
        ?>
    </div>
</section>
<!--! shop now -->