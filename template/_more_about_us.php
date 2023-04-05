<?php
$_SESSION['didUserFound'] = false;

?>
<section class="moreimformation" id="moreimformation">
    <div class="imgofus" style="margin-top: 60px; border-radius : 7px;padding-left:20px">
        <img src="./assets/moreabout.png" alt="image of our" class="mt-3" />

    </div>
    <div class="ourh" style="padding-right: 90px;">
        <span>More About Us</span>
        <p>
            Welcome to Fashion4u! We are a clothing brand that offers stylish and comfortable clothing for both men and women. Our mission is to provide our customers with high-quality clothing that they can wear with confidence.

            At Fashion4u, we believe that fashion should be accessible to everyone. That's why we offer a wide range of clothing items at affordable prices. From shoes and t-shirts to suits and formal pants, we have everything you need to look your best.

            Our team is passionate about fashion and we are always on the lookout for the latest trends. We take pride in our work and strive to provide our customers with the best possible shopping experience. <br><br>
            We are always looking for ways to improve our products and services. If you have any feedback or suggestions, please don't hesitate to contact us. We value your input and are always happy to hear from our customers.

        </p>
        <?php
        if ($_SERVER['PHP_SELF'] != '/group-13/aboutUs.php') {

        ?>
            <a href="#detailinformation" class="button1">More Information.</a>
        <?php
        }

        ?>
    </div>
</section>