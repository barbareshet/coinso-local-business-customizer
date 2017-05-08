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
<div id="lbs-footer-schema">

    <div itemscope itemtype="http://schema.org/<?php echo get_theme_mod('schema_type') ? get_theme_mod('schema_type') : 'localBusiness';?>" id="schema_city" style="list-style-type: none; margin-left: -15px;">
        <ul class="lbs-footer-list" style="list-style-type: none; padding-left: 0;" >
            <li>
                <div class="lbs-footer-logo">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>" alt="<?php echo get_theme_mod('schema_brand_name') ? get_theme_mod('schema_brand_name') : get_bloginfo('name'); ?>"  title="<?php echo get_theme_mod('schema_brand_name') ? get_theme_mod('schema_brand_name') : get_bloginfo('name'); ?>">
                        <span itemprop="logo" itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo get_theme_mod('schema_logo') ? get_theme_mod('schema_logo') : get_stylesheet_directory_uri() .'/assets/img/logo.png' ;?>" alt="<?php echo get_bloginfo('name'); ?>" itemprop="image" style="width: 120px">
                        </span>
                    </a>
                </div>
            </li>

            <li>
                <div class="footer-company-info">
                    <span class="lbs-schema-cap" itemprop="name" style="font-size: 20px; font-weight: bold; text-transform: capitalize"><?php echo get_theme_mod('schema_brand_name') ? get_theme_mod('schema_brand_name') : get_bloginfo('name'); ?></span><br>
                    <span class="lbs-schema-cap" itemprop="description" style="font-size: 18px; font-weight: 500; text-transform: capitalize"><?php echo get_theme_mod('schema_brand_description') ? get_theme_mod('schema_brand_description') : get_bloginfo('description');?></span>
                </div>
            </li>
            <li class="lbs-inline-block">
                <div class="lbs-footer-address">
                    <div class="lbs-description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <i class="fa fa-home">&nbsp</i>
                        <span class="lbs-schema-cap" itemprop="streetAddress"><?php echo get_theme_mod('schema_street_address') ? get_theme_mod('schema_street_address') : 'Street Name' ?></span>,<br>
                        <span class="lbs-schema-cap" itemprop="addressLocality"><?php echo get_theme_mod('schema_city') ? get_theme_mod('schema_city') : 'City Name' ?>,</span>
                        <span class="lbs-schema-cap" itemprop="addressRegion"><?php echo get_theme_mod('schema_region') ? get_theme_mod('schema_region') : 'Region' ?>,</span>
                        <span class="lbs-schema-cap" itemprop="postalCode"><?php echo get_theme_mod('schema_zip') ? get_theme_mod('schema_zip') : 'Zip Code' ?></span>
                    </div>
                </div>
            </li>
            <li class="lbs-inline-block">
                <div class="lbs-footer-phone"><i class="fa fa-phone">&nbsp</i>
                    <span itemprop="telephone"><?php echo get_theme_mod('schema_phone_number') ? get_theme_mod('schema_phone_number') : '(123) 456-7890' ?></span>

                </div>
            </li>
            <li class="lbs-inline-block">
                <div class="lbs-footer-hours"><i class="fa fa-clock-o">&nbsp</i>

                    <time itemprop="openingHours" datetime="<?php echo get_theme_mod('schema_opening_hours') ? get_theme_mod('schema_opening_hours') : 'Mo-Su 00:00-23:59';?>"><?php echo get_theme_mod('schema_opening_hours') ? get_theme_mod('schema_opening_hours') : 'Mo-Su 00:00-23:59';?></time>

                </div>
            </li>

        </ul>
        <div class="lbs-footer-social-icons">
            <ul class="lbs-list-inline" style="list-style-type: none;">
                <?php $fb_link = get_theme_mod('facebook_url_field');
                if($fb_link){?>
                    <li style="display: inline-block; float: left; margin-right: 10px">
                        <a href="<?php echo $fb_link;?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i> </a>
                    </li>
                <?php     }
                $twitter_link = get_theme_mod('twitter_url_field');
                if($twitter_link){?>
                    <li style="display: inline-block; float: left; margin-right: 10px">
                        <a href="<?php echo $twitter_link;?>" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i> </a>
                    </li>
                <?php    }
                $google_plus_link = get_theme_mod('google_plus_url_field');
                if($google_plus_link){ ?>
                    <li style="display: inline-block; float: left; margin-right: 10px">
                        <a href="<?php echo $google_plus_link;?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i> </a>
                    </li>
                <?php }
                $yelp_link = get_theme_mod('yelp_url_field');
                if($yelp_link){?>
                    <li style="display: inline-block; float: left; margin-right: 10px">
                        <a href="<?php echo $yelp_link;?>" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i> </a>
                    </li>
                <?php    }
                ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>



</div><!-- #footer-disclaimer -->
