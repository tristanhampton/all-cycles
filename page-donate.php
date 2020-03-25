<?php get_header() ?>
<main class="container">
    <h2>Donate</h2>
    <p><a href="http://tristanhampton.ca/all-cycles/guidelines">Guidelines</a></p>
    <p><a href="https://www.amazon.ca/gp/registry/wishlist/OFRL3HEEQAXF/ref=nav_wishlist_lists_1">Amazon Wishlist</a></p>
    <!-- Donation button links to paypal using this form. -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="allcyclesedmonton@gmail.com" />
        <input type="hidden" name="currency_code" value="CAD" />
        <button type="submit">Donate</button>
    </form>
    
    <section>
        <h3>Donation Locations</h3>
        <?php $query = new WP_Query(array('post_type'=>'donation_location')) ?>
            <?php if($query -> have_posts()): ?>
            <section>
                <?php while($query -> have_posts()): $query -> the_post(); ?>
                <?php $address = get_field('address') ?>
                <div class="beneficiary">
                    <h3><?php the_field('organization_name') ?></h3> 
                    <img src="<?php the_field('logo')  ?>" alt="<?php the_field('organization_name') ?> logo">
                    <p><?php the_field('description') ?></p>
                    <div class="address">
                        <p><?php echo $address['street'] ?></p>
                        <p><?php echo $address['city'] ?>, <?php echo $address['province'] ?></p>
                        <p><?php echo $address['postal_code'] ?></p>
                    </div>
                    <p><?php the_field('phone_number') ?></p>
                    <a href="<?php the_field('website_url') ?>">Visit Site</a>
                </div>
                <?php endwhile ?>
            </section>
            <?php endif ?>
    </section>
</main>

<?php get_footer() ?>