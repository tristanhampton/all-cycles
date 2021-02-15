<?php get_header() ?>

<main class="front-page">
    <section class="container intro">
        <div class="content">
            <h2>Welcome to <span>All Cycles</span></h2>
            <p>Our goal is to provide menstrual products to the homeless and income insecure, as these products are rarely donated to shelters.</p>
            <p>We also strive to destigmatize menstruation and dissociate it from an inherently feminine experience.</p>
        </div>
        <div class="iframe-container">
            <iframe src="https://www.youtube.com/embed/oadPgpei0j8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="products container width--full">
        <div class="container width--narrow">
            <h2>Products Donated</h2>
            <?php $query = new WP_Query(array('post_type'=>'products_donated', 'order'=>'DESC', 'orderby'=>'date', "posts_per_page"=>1)) ?>
            <?php if($query -> have_posts()): ?>
            <?php while($query -> have_posts()): $query -> the_post(); ?>
            <?php $quantity = get_field('number_of_products_donated') ?>
            <?php $quantity = number_format($quantity, 0, ',', ',') ?>
            <p><?php echo $quantity ?></p>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>

    <section class="splash container width--full">
        <div class="container width--narrow">
            <h2>Want Products Delivered?</h2>
            <p>We know things have been tough during the COVID-19 epidemic. We're now offering free delivery of menstrual products to those that need them!</p>
            <a href="https://docs.google.com/forms/d/1VGVBLUdW23XLSNRkCh1OonrKICGPzKse4kGqxYhsdqo/viewform?edit_requested=true#responses">Request Delivery</a>
        </div>
    </section>

    <div class="container">
        <h2>What's New</h2>
        <div class="partner-container two-column">
            <?php $query = new WP_Query(array('post_type'=>'events', 'order'=>'DESC', 'orderby'=>'date', "posts_per_page"=>4)) ?>
            <?php if($query -> have_posts()): ?>
            <?php while($query -> have_posts()): $query -> the_post(); ?>
            <div class="event">
                <img src="<?php the_field('image')  ?>" alt="Photo from <?php the_field('title') ?>">
                <h3><?php the_field('title') ?></h3> 
                <p><?= wp_trim_words(get_field('description'), 50) ?></p>
                <a class="readmore" href="<?php the_permalink() ?>">Read More</a>
            </div>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>

    <section class="newsletter container width--full">
        <form class="container" action="https://formspree.io/xpzylllp" method="POST">
            <input type="hidden" name="_subject" value="New newsletter subscription!" />
            <h2>Join Our Mailing List</h2>
            <p>Never miss an update,</p>
            <p>Enter your email below</p>
            <input id="email" type="email" name="Email">
            <div class="submit-button">
                <div class="clickable"></div>
                <button role="submit" disabled>Sign Up!</button>
            </div>
            <div class="error-messages front-page-errors"></div>
        </form>
    </section>
</main>

<?php get_footer() ?>