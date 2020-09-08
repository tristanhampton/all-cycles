<?php get_header() ?>
<main class="donate">
    <div class="wrapper">
        <h2>Donate</h2>
        <p>Thank you for supporting All Cycles and the people of Edmonton! There are lots of ways you can support our cause:</p>
        <p>Use the donate button to give directly to us by PayPal, or if you’d like to donate physical products our Amazon Wishlist will tell you exactly what we’re currently looking for.</p>
        <p>If you have products at home that you aren’t using, please review our donation guidelines before dropping them off at any of the donation locations below. </p>
        <!-- Donation button links to paypal using this form. -->
        <div class="flex-container">
            <a href="http://allcyclesyeg.ca/guidelines">Guidelines</a>
            <form class="paypal-button" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations" />
                <input type="hidden" name="business" value="allcyclesedmonton@gmail.com" />
                <input type="hidden" name="currency_code" value="CAD" />
                <button type="submit">Donate</button>
            </form>
            <a class="amazon-button" href="https://www.amazon.ca/gp/registry/wishlist/OFRL3HEEQAXF/ref=nav_wishlist_lists_1">Amazon Wishlist</a>
        </div>
        
        <h2>Donation Locations</h2>
        <?php $query = new WP_Query(array('post_type'=>'donation_location')) ?>
        <?php if($query -> have_posts()): ?>
        <section class="partner-container three-column">
            <?php while($query -> have_posts()): $query -> the_post(); ?>
            <?php $address = get_field('address') ?>
            <div class="partner">
                <h3><?php the_field('organization_name') ?></h3> 
                <img src="<?php the_field('logo')  ?>" alt="<?php the_field('organization_name') ?> logo">
                <p><?php the_field('description') ?></p>
                <ul class="address">
                    <li><?php echo $address['street'] ?></li>
                    <li><?php echo $address['city'] ?>, <?php echo $address['province'] ?></li>
                    <li><?php echo $address['postal_code'] ?></li>
                    <li><?php the_field('phone_number') ?></li>
                </ul>
                <a href="<?php the_field('website_url') ?>">Visit Site</a>
            </div>
            <?php endwhile ?>
        </section>
        <?php endif ?>
    </div>
</main>

<?php get_footer() ?>