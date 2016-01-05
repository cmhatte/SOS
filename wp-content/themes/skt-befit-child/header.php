<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT BeFit
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<style>.nivo-directionNav{ display:none; }</style>
<style>
	/* theme overrides */
	.header {
		margin-top: 440px;
		margin-bottom:-646px;
	}
	.header-inner { background-color: rgba(0, 0, 0, 0.8 ); }
</style>
</head>
<body <?php body_class(''); ?>>
<div id="wrapper">
  <div class="topbararea" style="display:none;">
    <div class="topfirstbar">
      <div class="topbarleft">
        <div class="email-top">
          <?php if( '' !== get_theme_mod('contact_mail')){ ?>
          <a href="mailto:<?php echo sanitize_email(get_theme_mod('contact_mail')); ?>"><?php echo get_theme_mod('contact_mail'); ?></a>
          <?php } ?>
        </div>
        <div class="social-top social">
          <?php if ( '' !== get_theme_mod( 'fb_link' ) ) { ?>
          <a target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook')); ?>" title="Facebook" >
          <div class="fb icon"></div>
          </a>
          <?php } ?>
          <?php if ( '' !== get_theme_mod( 'twitt_link' ) ) { ?>
          <a target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','#twitter')); ?>" title="Twitter" >
          <div class="twitt icon"></div>
          </a>
          <?php } ?>
          <?php if ( '' !== get_theme_mod( 'gplus_link' ) ) { ?>
          <a target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>" title="Google Plus" >
          <div class="gplus icon"></div>
          </a>
          <?php } ?>
          <?php if ( '' !== get_theme_mod( 'linked_link' ) ) { ?>
          <a target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin')); ?>" title="Linkedin" >
          <div class="linkedin icon"></div>
          </a>
          <?php } ?>
        </div>
      </div>
      <div class="topbarright">
        <div class="top-phonearea">
          <?php if ( '' !== get_theme_mod( 'contact_no' ) ){  ?>
          <div class="top-phone"><?php echo get_theme_mod('contact_no',esc_attr__('+1 800 234 5678','skt-befit')); ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header-inner header">
    <div class="site-aligner">
      <?php /*
      <div class="logo">
        <h2><a href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
          </a></h2>
        <p>
          <?php bloginfo('description'); ?>
        </p>
      </div>
      <!-- logo -->
      */ ?>
      <style>
				.site-nav {
					float: left;
					padding: 0px;
				}
				.site-nav li:hover a,
				.site-nav li.current_page_item a,
				.site-nav li:hover ul li:hover,
				.site-nav li:hover ul li.current-page-item,
				.site-nav li:hover ul li {
					color: #FFF;
				}

      </style>
      <div class="mobile_nav"><a href="<?php esc_url('#');?>">
        <?php _e('Go To...','skt-befit'); ?>
        </a></div>
      <div class="site-nav">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
      </div>
      <!-- site-nav -->
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- header-inner -->
</div>
<!-- header -->
<?php
if ( is_front_page() && is_home() ) {
?>
<?php
}
elseif ( is_front_page() ) {
?>
<!-- Slider Section -->
<?php for($sld=1; $sld<4; $sld++) { ?>
<?php if( get_theme_mod('slide-setting'.$sld)) { ?>
<?php $slidequery = new WP_query('page_id='.get_theme_mod('slide-setting'.$sld,true)); ?>
<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
$img_arr[] = $image;
$id_arr[] = $post->ID;
endwhile;
}
}
/*if(!empty($id_arr)){ ?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php
	      $i=1;
	      foreach($img_arr as $url){ ?>
        <img src="<?php echo $url; ?>" title="#slidecaption<?php echo $i; ?>" />
        <?php $i++; }  ?>
    </div>
    <?php
    $i=1;
    foreach($id_arr as $id){
    $title = get_the_title( $id );
    $post = get_post($id);
    $content = apply_filters('the_content', substr(strip_tags($post->post_content), 0, 250));
    ?>
    <div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
      <div class="slide_info">
        <h2><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
        <p><?php echo $content; ?></p>
        <div class="clear"></div>
        <div class="slide_more"><a href="<?php the_permalink(); ?>">
          <?php esc_attr_e('Train With Amanda','skt-befit');?>
          </a></div>
      </div>
    </div>
    <?php $i++; } ?>
  </div>
  <div class="clear"></div>
</section>
<?php } else { */ ?>
<style>
	#home_header {
		height:550px;
		margin-top: -310px;
		min-width:1000px;
		overflow: hidden;
	}
</style>
<section id="home_header">
  <style>
		.logo {
			float: none;
			margin-top: -100px;
			position: relative;
			top: 400px;
			width: 100%;
		}
		.logo h2 a {
			color: #000;
			font-family: "Times New Roman";
			text-transform: uppercase;
		}
		.logo h2 {
			padding: 15px 20px;
		}
  </style>
  <div class="logo">
    <h2 style="width:400px; margin: 0 auto; background-color: rgba(255,255,255, 0.8); text-align: center;">
    	<a href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
      </a>
    </h2>
    <?php /*
    <p>
      <?php bloginfo('description'); ?>
    </p>
    */ ?>
  </div>
  <?php $wp_upload_dir = wp_upload_dir(); ?>
  <img title="" src="<?php echo $wp_upload_dir['baseurl'];?>/2015/11/WP_post1_united-states-capitol-at-night-illuminated-with-decorative-lights.jpg">
</section>
<style>
	#home_slider {
		margin-bottom:80px;
	}
</style>
<section id="home_slider" style="top:-190px; color:#FFF;">
  <div class="slider-wrapper theme-default">

    <div class="nivoSlider" id="slider">
      <?php /* <img title="" src="<?php echo $wp_upload_dir['baseurl'];?>/2015/11/WP_post1_united-states-capitol-at-night-illuminated-with-decorative-lights.jpg">
      <!-- http://52.32.70.139/wp-content/uploads/2015/11/WP_post1_united-states-capitol-at-night-illuminated-with-decorative-lights.jpg -->
      */ ?>
      <?php /*
      <img title="#slidecaption1" src="<?php echo get_template_directory_uri();?>/images/slides/slider1.jpg">
      <img title="#slidecaption2" src="<?php echo get_template_directory_uri();?>/images/slides/slider2.jpg">
      <img title="#slidecaption3" src="<?php echo get_template_directory_uri();?>/images/slides/slider3.jpg">
      */ ?>
    </div>
    <div class="nivo-html-caption" id="slidecaption1">
      <div class="slide_info">
        <h1>
          <?php esc_attr_e('Be Always Stay Fit','skt-befit');?>
        </h1>
        <p>
          <?php esc_attr_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis malesuada ex non magna convallis aliquam. Nulla ullamcorper elit a ante ullamcorper, nec malesuada massa commodo. In ut nisi nisl. Nullam porta fringilla purus, quis mollis enim tincidunt ut. Praesent vitae lacus ligula.','skt-befit');?>
        </p>
        <div class="clear"></div>
        <div class="slide_more"><a href="<?php esc_url('#');?>">
          <?php esc_attr_e('Train With Amanda','skt-befit');?>
          </a></div>
      </div>
    </div>
    <?php /*
    <div class="nivo-html-caption" id="slidecaption2">
      <div class="slide_info">
        <h1>
          <?php esc_attr_e('Fitness Health And Wellbeing','skt-befit');?>
        </h1>
        <p>
          <?php esc_attr_e('Morbi faucibus nisi elit, vitae volutpat ante condimentum eu. Phasellus a mauris luctus, ullamcorper tortor vitae, tristique nulla. In sed est ut purus bibendum tempor sit amet vel orci.','skt-befit');?>
        </p>
        <div class="clear"></div>
        <div class="slide_more"><a href="<?php esc_url('#');?>">
          <?php esc_attr_e('Train With Amanda','skt-befit');?>
          </a></div>
      </div>
    </div>
    <div class="nivo-html-caption" id="slidecaption3">
      <div class="slide_info">
        <h1>
          <?php esc_attr_e('Get In Shape With Exercise','skt-befit');?>
        </h1>
        <p>
          <?php esc_attr_e('Morbi faucibus nisi elit, vitae volutpat ante condimentum eu. Phasellus a mauris luctus, ullamcorper tortor vitae, tristique nulla. In sed est ut purus bibendum tempor sit amet vel orci.','skt-befit');?>
        </p>
        <div class="clear"></div>
        <div class="slide_more"><a href="<?php esc_url('#');?>">
          <?php esc_attr_e('Train With Amanda','skt-befit');?>
          </a></div>
      </div>
    </div>
     */ ?>
  </div>
  <div class="clear"></div>
</section>
<?php
	/* } */
?>


<style>
	.my-top-matches {
		clear:both;
		background-color:#F47135;
		color: #FFF;
		font-family: "Times New Roman";
		margin-left: 2%;
		margin-right: 2%;
		padding: 10px 20px;
		float:left;
		width:350px;
		height:200px;
		text-align: center;
	}
	.top-trending {
		float:left;
		background-color:#FFF;
		color:#000;
		font-family: "Times New Roman";
		margin-left: 2%;
		padding: 10px 10px;
		width: 350px;
		height: 300px;
		text-align: center;
		border: 1px solid #777;
	}
		.top-trending-box {
			background-color: #F47135;
			font-size: 12px;
			color: #FFF;
			width:150px;
			height:190px;
			float: left;
			margin-right:1%;
		}
</style>

<div class="my-top-matches">
	<h3>MY TOP MATCHES</h3>
</div>

<div class="top-trending">
	<h3>TRENDING</h3>
	<div class="top-trending-box">
		<img src="" width="150">
		<p>1. Marco Rubio</p>
		<p>&#9650; 23%</p>
	</div>
	<div class="top-trending-box">
		<img src="" width="150">
		<p>2. Hillary Clinton</p>
		<p>&#9650; 15% &#9660;</p>
	</div>
</div>

<style>
	.feature-box-main {
		margin-top: 235px;
		width: 75% !important;
	}

</style>


<div class="feature-box-main site-aligner">
  <?php
	  for($tbx=1; $tbx<5; $tbx++) {
		 if( get_theme_mod('page-setting'.$tbx)) {
		 $threeboxquery = new WP_query('page_id='.get_theme_mod('page-setting'.$tbx,true));
		 while( $threeboxquery->have_posts() ) : $threeboxquery->the_post(); ?>
  <div class="feature-box"> <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    <h2>
      <?php the_title(); ?>
    </h2>
    <span></span> <?php echo wp_kses_post(sktbefit_content(10)); ?> </a><a class="read-more" href="<?php the_permalink(); ?>">
    <?php _e('Read More','skt-befit');?>
    </a> </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php }else{ ?>
  <div class="feature-box"><a href="<?php esc_url('#');?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon_<?php echo esc_attr($tbx); ?>.png">
    <h2>
      <?php _e('Box Title','skt-befit');?>
      <?php echo esc_attr($tbx); ?></h2>
    <span></span>
    <p>
      <?php esc_attr_e('Lose weight, get stronger, healthier, and evolve.','skt-befit');?>
    </p>
    </a><a class="read-more" href="<?php esc_url('#');?>">
    <?php esc_attr_e('Read More','skt-befit');?>
    </a> </div>
  <?php
}
}
?>
  <div class="clear"></div>
</div>
<?php
}
elseif ( is_home() ) {
?>
<?php
}
?>
