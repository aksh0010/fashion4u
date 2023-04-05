<br>
<br>
<br>
<br>
<?php
$_SESSION['didUserFound'] = false;
$cartItems = $cart->getCartItems('cart', $_SESSION['SessionUserId']);
$saveForLaterItems = $cart->getCartItems('wishlist', $_SESSION['SessionUserId']);
// print_r($_SERVER['PHP_SELF']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['deleteFromCart'])) {

        $cart->deleteFromCart('cart', $_SESSION['SessionUserId'], $_POST['item_id']);
    }

    if (isset($_POST['saveForLater'])) {

        $cart->addToTable($_POST['item_id'], 'wishlist', $_SESSION['SessionUserId']);
        $cart->deleteFromCart('cart', $_SESSION['SessionUserId'], $_POST['item_id']);
    }

    if (isset($_POST['addToCartSaveForLater'])) {

        $cart->addToTable($_POST['item_id'], 'cart', $_SESSION['SessionUserId']);
        $cart->deleteFromCart('wishlist', $_SESSION['SessionUserId'], $_POST['item_id']);
    }

    if (isset($_POST['deleteFromSaveForLater'])) {

        $cart->deleteFromCart('wishlist', $_SESSION['SessionUserId'], $_POST['item_id']);
    }
}


?>

<!-- shopping cart section -->

<div class="container-fluid w-75">
    <h3 style="margin-left: 5px; color:rgba(247, 149, 2, 0.87)">Shopping Cart</h5>
    <!--  shopping cart items   -->
    <div class="row">

        <?php
        if ($cart->getCount($_SESSION['SessionUserId'], 'cart') > 0)
            foreach ($cartItems as $item) :
        ?>

            <!-- cart item -->
            <div class="row border-top py-2 mt-3">
                <div class="col-sm-2">
                    <img src="<?php echo $item['item_image']  ?>" style="height: 150px;" alt="cart1" class="rounded img-fluid">
                </div>
                <div class="col-sm-8">
                    <br>
                    <h5 font-weight-bold"><?php echo $item['item_name'] ?></h5>
                    <br>

                    <!-- product submit -->
                    <div class="qty d-flex pt-2">
                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                            <input type="hidden" name="user_id" value="1">
                            <button type="submit" name="deleteFromCart" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                        </form>

                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                            <input type="hidden" name="user_id" value="1">
                            <button type="submit" name="saveForLater" class="btn font-baloo text-danger">Save for Later</button>
                        </form>
                    </div>
                    <!-- !product submit -->

                </div>

                <div class="col-sm-2 text-right">
                    <span class="m-color">
                        <br>
                        $<span class="product_price"><?php echo $item['item_price'] ?></span>
                    </span>
                </div>
            </div>

        <?php
            endforeach;
        ?>
    </div>
    <!-- !cart item -->

    <?php
    if ($cart->getCount($_SESSION['SessionUserId'], 'cart') <= 0) {
    ?>
        <div class="container" style="text-align: center;">
            <!-- <i class='bx bx-cart' style="font-size: 300px;"></i> -->
            <img src="./assets/empty.png" alt="empty cart" style="height: 300px;">
        </div>
    <?php
    }

    ?>

</div>

</div>
<!--  !shopping cart items   -->
<br>
<br>
<br>
<div class="container-fluid w-75">
    <h3 style="margin-left: 5px; color:rgba(247, 149, 2, 0.87)">Wishlist</h5>

    <!--  save for later items   -->
    <div class="row">

        <?php
     
        if ($cart->getCount($_SESSION['SessionUserId'], 'wishlist') > 0)
            foreach ($saveForLaterItems as $item) :
        ?>

            <!-- cart item -->
            <div class="row border-top py-2 mt-3">
                <div class="col-sm-2">
                    <img src="<?php echo $item['item_image']  ?>" style="height: 150px;" alt="cart1" class="rounded img-fluid">
                </div>
                <div class="col-sm-8">
                    <br>
                    <h5 font-weight-bold"><?php echo $item['item_name'] ?></h5>
                    <br>

                    <!-- product submit -->
                    <div class="qty d-flex pt-2">
                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                            <input type="hidden" name="user_id" value="1">
                            <button type="submit" name="deleteFromSaveForLater" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                        </form>

                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                            <input type="hidden" name="user_id" value="1">
                            <button type="submit" name="addToCartSaveForLater" class="btn font-baloo text-danger">Add To Cart</button>
                        </form>
                    </div>
                    <!-- !product submit -->

                </div>

                <div class="col-sm-2 text-right">
                    <span class="m-color">
                        <br>
                        $<span class="product_price"><?php echo $item['item_price'] ?></span>
                    </span>
                    </>
                </div>
            </div>
            <!-- !cart item -->

        <?php
            endforeach;
        ?>
    </div>
    <!-- !cart item -->

    <?php
    if ($cart->getCount($_SESSION['SessionUserId'], 'wishlist') <= 0) {
    ?>
        <div class="container" style="text-align: center;">
            <!-- <i class='bx bx-cart' style="font-size: 300px;"></i> -->
            <img src="./assets/wishlist.png" alt="empty cart" style="height: 200px;">
        </div>
    <?php
    }

    ?>
</div>

</div>
<!--  !save for later items   -->

<!-- subtotal section -->
<section style="margin-left: auto;" class="row border-top py-5 finaltotal" id="finaltotal">

    <div class="totalamount" style="width: 40%;">
        <h3>Final Total</h3>
        <table class="table table-hover table-dark">
            <tr>
                <td>Cart Total</td>
                <td>$<?php echo $cart->getCartTotal($_SESSION['SessionUserId']) ?></td>
            </tr>

            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$<?php echo $cart->getCartTotal($_SESSION['SessionUserId']) ?></strong></td>
            </tr>
        </table>

        <button class="checkout">CheckOut</button>
    </div>
</section>



</div>

<!-- !shopping cart section -->