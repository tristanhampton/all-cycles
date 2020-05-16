<?php get_header() ?>
    <main class="beneficiaries">
        <div class="wrapper">
            <h2>Beneficiaries</h2>
            <p>Donations that come in to All Cycles Edmonton are all re-distributed to local organizations that are in the most need of menstrual products and support feminist and queer-friendly policies.</p>
            <p>You can view all of our beneficiaries in the list below.</p>
            <!-- Loop over beneficiaries -->
            <?php $query = new WP_Query(array('post_type'=>'beneficiary')) ?>
            <?php if($query -> have_posts()): ?>
            <section class="partner-container">
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