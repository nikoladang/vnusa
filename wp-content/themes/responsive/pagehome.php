<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Landing Page Template
 *
Template Name:  Page Home
 *
 * @file           pagehome.php
 * @author         ducthinhdt
 * @filesource     wp-content/themes/responsive/pagehome.php
 */

get_header(); ?>

<?php get_sidebar('uhome'); ?>

<div id="content" class="">
  <div id="rectangle">
    <div class="business">
      <p><a href="<?php echo site_url(); ?>/home-rectangle/home-business-developing/">Business Developing</a></p>
    <!-- /.business --></div>
    <div class="logo_center">
      <ul>
        <li class="last"><a href="<?php echo site_url(); ?>/home-rectangle/home-traveling-visa/" class="traveling">Traveling - VISA</a></li>
        <li><a class="logo_vnusa" href="#"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/logo_vnusa.png" width="240" height="130" alt="Logo center"></a></li>
        <li class="last"><a href="<?php echo site_url(); ?>/home-rectangle/home-english/" class="languages_edu">Education - English Clubs</a></li>
      </ul>   
    <!-- /.logo_center --></div>
    <div class="row_other">
      <ul>
        <li><a href="<?php echo site_url(); ?>/home-rectangle/home-other/" class="other">Other</a></li>
        <li><a href="<?php echo site_url(); ?>/home-rectangle/home-jobs/" class="jobs">Jobs</a></li>
      </ul>
    <!-- /.row_other --></div>
  <!-- /#rectangle --></div>
</div><!-- end of #content -->


<div id="content_sp" class="">
  <div id="rectangle">
    <div class="business"><a href="<?php echo site_url(); ?>/home-rectangle/home-business-developing/">Business Developing</a></div>
    <div class="logo_center"><a href="<?php echo site_url(); ?>/home-rectangle/home-traveling-visa/" class="traveling">Traveling - VISA</a></div>
    <div class="logo_center"><a href="<?php echo site_url(); ?>/home-rectangle/home-english/" class="languages_edu">Education - English Clubs</a></div>
    <div class="row_other"><a href="<?php echo site_url(); ?>/home-rectangle/home-other/" class="other">Other</a></div>
    <div class="row_other"><a href="<?php echo site_url(); ?>/home-rectangle/home-jobs/" class="jobs">Jobs</a></div>  
  </div>
</div>

<?php get_footer(); ?>
