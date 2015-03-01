<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'happyhealth' ), max( $paged, $page ) );
		?></title>
	
	<meta name="description" content="<?php if ( is_single() ) :
	    single_post_title('', true); 
	else :
	    bloginfo('name'); echo " - "; bloginfo('description');
	endif;
	?>" />

	<?php   
	 $options = get_option("sf_favicon");
	 $file = $options['file']; 
		?>
	<?php if ($filelogo['url'] <> '') : 
			$src = $filelogo['url'];
         else : 
		    $src =  get_template_directory_uri()."/images/logo.png";
         endif;      
		 ?>
		 	<?php if ($file['url']<>'') : ?><link rel="shortcut icon" type="image/x-icon" href="<?php echo $file['url'];?>" /><?php endif;?>
	<?php if ($filetouchicon['url']<>'') : ?><link rel="apple-touch-icon-precomposed" href="<?php echo $filetouchicon['url'];?>" /><?php endif;?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo bloginfo( 'name' ); ?> RSS Feed" href="<?php echo bloginfo( 'rss2_url' ); ?>" />
	<?php wp_head();?>
	<script type="text/javascript">
	jQuery(document).ready(function ($){


        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
		$(".gallery-icon a").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
			$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
		  $('#tabs-content-bottom').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });		
		$('.slider-partners.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
            itemWidth: 163,
            itemMargin: 0
        });			
		
		$('#slider-news.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
			$('#form-comment').validate();
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		 $('#slider-event.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $( ".accordion" ).accordion({
	        heightStyle: "content"
        });
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
</head>
<body <?php if ( 'posts' == get_option( 'show_on_front' ) ) : body_class(); else: body_class('slideshow'); endif; ?>>
	<header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo $src;?>" alt="<?php bloginfo('name'); ?>" /></a>
                <aside id="header-content" >
         
 		             <?php wp_nav_menu( array( 'theme_location' => 'header-navigation','container' => '', 'items_wrap' => '<ul id="nav-header">%3$s</ul>'  ) ); ?>
                    <h3 id="slogan">Telephone: <span class="lightblue">01531 632 509</span></h3>
                </aside>
            </div>
        </div>
        <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                                         <?php wp_nav_menu( array( 'theme_location' => 'main-navigation','container' => '', 'items_wrap' => '<ul id="nav-main">%3$s</ul>'  ) ); ?>
                        <?php 
						$sf_reg_button_text = esc_attr(convert_smart_quotes(get_option('sf_reg_button_text')));
						$sf_reg_button_url = esc_attr(convert_smart_quotes(get_option('sf_reg_button_url')));
						if (($sf_reg_button_text <> '') || ($sf_reg_button_url <> '') ) :?><a href="<?php echo $sf_reg_button_url;?>" id="button-registration"><?php echo $sf_reg_button_text;?></a><?php endif;?>
                    </div>
                </nav>
    </header>
