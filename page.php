<?php get_header() ?>
<?php 

if (is_page('donate')) {
    get_template_part('template-parts/page/donate.php');
}

if (is_page('beneficiaries')) {
    get_template_part('template-parts/page/beneficiaries.php');
}

if (is_page('volunteer')) {
    get_template_part('template-parts/page/volunteer.php');
}

if (is_page('resources')) {
    get_template_part('template-parts/page/resources.php');
}

if (is_page('contact')) {
    get_template_part('template-parts/page/contact.php');
}

?>
<?php get_footer() ?>