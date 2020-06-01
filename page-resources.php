<?php get_header() ?>
    <main class="resources">
        <div class="wrapper">
            <h2>Resources</h2>
            <!-- Loop over beneficiaries -->
            <?php $query = new WP_Query(array('post_type'=>'resource')) ?>
                <?php if($query -> have_posts()): ?>
                <section class="partner-container two-column">
                    <?php while($query -> have_posts()): $query -> the_post(); ?>
                    <?php $address = get_field('address') ?>
                    <div class="partner">
                        <img src="<?php the_field('logo')  ?>" alt="<?php the_field('organization_name') ?> logo">
                        <h3><?php the_field('organization_name') ?></h3> 
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