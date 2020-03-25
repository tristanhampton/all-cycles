<?php get_header() ?>
    <main class="container">
        <h2>Resources</h2>
        <!-- Loop over beneficiaries -->
        <?php $query = new WP_Query(array('post_type'=>'resource')) ?>
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

    </main>

<?php get_footer() ?>