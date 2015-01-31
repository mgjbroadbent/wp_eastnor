
<?php 
/*
Template Name: Front Page
*/
ini_set('display_errors', 0);
@get_header();
$sf_banner_image = get_option('sf_banner_image');
$filebanner =  $sf_banner_image['file'];
$sf_banner_url = esc_attr(convert_smart_quotes(get_option('sf_banner_url')));
$sf_homepage_intro_title = esc_attr(convert_smart_quotes(get_option('sf_homepage_intro_title')));
$sf_homepage_intro_text = convert_smart_quotes(get_option('sf_homepage_intro_text'));
$sf_homepage_intro_url_text = esc_attr(convert_smart_quotes(get_option('sf_homepage_intro_url_text')));
$sf_homepage_intro_url = esc_attr(convert_smart_quotes(get_option('sf_homepage_intro_url')));
$sf_homepage_intro_image = get_option('sf_homepage_intro_image');
$fileintroimage = $sf_homepage_intro_image['file'];

$sf_icon1 = get_option('sf_icon1');
$fileicon1 = $sf_icon1['file'];
$sf_sidebar_title1 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_title1')));
$sf_sidebar_text1 = convert_smart_quotes(get_option('sf_sidebar_text1'));
$sf_sidebar_url1 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_url1')));

$sf_icon2 = get_option('sf_icon2');
$fileicon2 = $sf_icon2['file'];
$sf_sidebar_title2 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_title2')));
$sf_sidebar_text2 = convert_smart_quotes(get_option('sf_sidebar_text2'));
$sf_sidebar_url2 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_url2')));

$sf_icon3 = get_option('sf_icon3');
$fileicon3 = $sf_icon3['file'];
$sf_sidebar_title3 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_title3')));
$sf_sidebar_text3 = convert_smart_quotes(get_option('sf_sidebar_text3'));
$sf_sidebar_url3 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_url3')));

$sf_icon4 = get_option('sf_icon4');
$fileicon4 = $sf_icon4['file'];
$sf_sidebar_title4 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_title4')));
$sf_sidebar_text4 = convert_smart_quotes(get_option('sf_sidebar_text4'));
$sf_sidebar_url4 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_url4')));

$sf_icon5 = get_option('sf_icon5');
$fileicon5 = $sf_icon5['file'];
$sf_sidebar_title5 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_title5')));
$sf_sidebar_text5 = convert_smart_quotes(get_option('sf_sidebar_text5'));
$sf_sidebar_url5 = esc_attr(convert_smart_quotes(get_option('sf_sidebar_url5')));

$sf_welcome_intro_text = convert_smart_quotes(get_option('sf_welcome_intro_text'));
$sf_welcome_intro_name = esc_attr(convert_smart_quotes(get_option('sf_welcome_intro_name')));
$sf_welcome_intro_position = esc_attr(convert_smart_quotes(get_option('sf_welcome_intro_position')));
$sf_welcome_intro_url = esc_attr(convert_smart_quotes(get_option('sf_welcome_intro_url')));
$sf_welcome_intro_text_url = esc_attr(convert_smart_quotes(get_option('sf_welcome_intro_text_url')));
$sf_welcome_intro_image = get_option('sf_welcome_intro_image');
$filewelcome = $sf_welcome_intro_image['file'];
$sf_welcome_intro_image_retina = get_option('sf_welcome_intro_image_retina');
$filewelcomeretina = $sf_welcome_intro_image_retina['file'];
?>

    <div id="content-container">
        <div id="content" class="clearfix">
		<?php  if (have_posts()):
			$args = array(
				'sort_order' => 'DESC',
				'child_of' => $post->ID,
				'post_type' => 'page',
				'post_status' => 'publish'
				); 
				$children = get_pages($args); ?>
            <?php if ($children) :?>
			<nav id="nav-sub-container" class="clearfix">
                <ul id="nav-sub">
				<?php foreach($children as $child):?>
                    <li><a href="<?php echo get_page_link( $child->ID );?>"><?php echo $child->post_title;?></a></li>
                 <?php endforeach;?> 
                </ul>
            </nav>
			<?php endif;?>
			<?php endif;?>
            <div id="main-content" <?php if (get_option('sf_sidebar') =='Left'): echo "class=\"alignright\""; endif; ?>>
				<?php get_template_part('breadcrumbs');?>                
				<?php if ( have_posts() ) :?>
				<?php while (have_posts()) : the_post();?>
                <article class="static-page">
                    <?php the_content();?>
                </article>
				<?php endwhile;?>
				<?php wp_link_pages('pagelink= %'); ?>
				<?php endif;?>
            </div>
            <div id="sidebar"><?php if ( ! dynamic_sidebar( 'sidebar-homepage-right' ) ) : ?>			
						<aside class="widget-container">
							<div class="widget-wrapper clearfix">
							<h3 class="widget-title">Search</h3>
							</div>
						</aside>
						<?php endif;?>             
            </div>
			 <?php get_template_part('tabs-content-bottom');?>              
        </div>
    </div>
<?php get_footer();?>