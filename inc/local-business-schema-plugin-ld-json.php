<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/21/2017
 * Time: 10:10 AM
 */

if( ! defined( 'ABSPATH' ) ) {
    return;
}
?>
<?php
function coinso_footer_schema_ld_json(){
    if( !is_admin() && is_front_page() ) {

	    ob_start(); ?>
        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "<?php echo get_theme_mod( 'schema_type' ) ? get_theme_mod( 'schema_type' ) : 'localBusiness'; ?>",
            "image": "<?php echo get_theme_mod( 'schema_logo' ) ? get_theme_mod( 'schema_logo' ) : get_stylesheet_directory_uri() . '/assets/img/logo.png'; ?>",
            "hasMap": "<?php echo get_theme_mod( 'schema_map' ) ? get_theme_mod( 'schema_map' ) : ''; ?>",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo get_theme_mod( 'schema_street_address' ) ? get_theme_mod( 'schema_street_address' ) : 'Street Name' ?>",
            "addressLocality": "<?php echo get_theme_mod( 'schema_city' ) ? get_theme_mod( 'schema_city' ) : 'City Name' ?>",
            "addressRegion": "<?php echo get_theme_mod( 'schema_region' ) ? get_theme_mod( 'schema_region' ) : 'Region' ?>",
            "postalCode":"<?php echo get_theme_mod( 'schema_zip' ) ? get_theme_mod( 'schema_zip' ) : 'Zip Code' ?>"
            },
            "description": "<?php echo get_theme_mod( 'schema_brand_description' ) ? get_theme_mod( 'schema_brand_description' ) : get_bloginfo( 'description' ); ?>",
            "name": "<?php echo get_bloginfo( 'name' ); ?>",
            "telephone": "<?php echo get_theme_mod( 'schema_phone_number' ) ? get_theme_mod( 'schema_phone_number' ) : '(123) 456-7890' ?>",
            "openingHours": "<?php echo get_theme_mod( 'schema_opening_hours' ) ? get_theme_mod( 'schema_opening_hours' ) : 'Mo-Su 00:00-23:59'; ?>",
            "sameAs" : [
            "<?php echo get_theme_mod( 'facebook_url_field' ) ? get_theme_mod( 'facebook_url_field' ) : ''; ?>",
            "<?php echo get_theme_mod( 'twitter_url_field' ) ? get_theme_mod( 'twitter_url_field' ) : ''; ?>",
            "<?php echo get_theme_mod( 'google_plus_url_field' ) ? get_theme_mod( 'google_plus_url_field' ) : ''; ?>",
            "<?php echo get_theme_mod( 'yelp_url_field' ) ? get_theme_mod( 'yelp_url_field' ) : ''; ?>"]
            }

        </script>

	    <?php
    }
    echo ob_get_clean();
}

add_action('wp_head', 'coinso_footer_schema_ld_json');




